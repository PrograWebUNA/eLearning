  <?php



  namespace App\Http\Controllers;


  use Illuminate\Http\Request;

  use Artisaninweb\SoapWrapper\SoapWrapper;
  use App\Soap\Request\GetConversionAmount;
  use App\Soap\Response\GetConversionAmountResponse;
  use Illuminate\Support\Facades\Storage;
  use Illuminate\Support\Facades\Redirect;

  use App\Http\Controllers\VideoStream;

  use Response;
  use Input;
  use Session;


  /*
  Clase para la manipulacion  de archivos
  */

  class WSController extends Controller
  {

  /**
  * @var SoapWrapper: objeto de conexion al servicio web
  */
  protected $soapWrapper;

  /**
  * SoapController constructor.
  *
  * @param SoapWrapper $soapWrapper
  */
  public function __construct(SoapWrapper $soapWrapper)
  {
  $this->soapWrapper = $soapWrapper;
  }

  /*Funcion que hace la carga de archivos*/
  public function upload(){

  ini_set('memory_limit', '-1');
  // obteniendo la informacion del archivo
  $file = Input::file('file');
  $mime = $file->getMimeType();
  /* se identifica el tipo de archivo. se requiere que el modulo extension=php_fileinfo.dll este descomentado en el
  php.ini*/
  if ($mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv") {
  // send back to the page with the input data and errors
  if (Input::file('file')->isValid()) {
    //La ruta del repositorio es en C:\localRepository
    $destinationPath = $localRepo = realpath('../../../../') . "\localRepository/" . "\\"; /* ruta del repositorio local para cargar el archivo y luego subirlo por el servicio*/
    $extension = Input::file('file')->getClientOriginalExtension(); // obtiene la extension del archivo
    $originalName = Input::file('file')->getClientOriginalName(); //obtiene el nombre original del archivo
    $fileName = rand(11111,99999).'.'.$extension; // renombrar el archivo para subirlo al repositorio de forma temporal
    Input::file('file')->move($destinationPath, $fileName); // subiendo el archivo al repositorio temporal
    //Inicia conexion con el servicio web
    $this->soapWrapper->add('video', function ($service) {
    $service->wsdl("http://localhost:9999/MtomStreamingService?wsdl");
    $service->trace(true);                                                   // Optional: (parameter: true/false)
    $service->cache(WSDL_CACHE_NONE);                                        // Optional: Set the WSDL cache

  });

  //obtiene la ruta del repositorio local
  $localRepo = realpath('../../../../') . "\localRepository/" . "\\";
  //Indica el nombre del archivo original para enviarselo al WS
  $Originalfilename = $originalName;

  //Le dice cual es el nombre del archivo que tiene en el repositorio
  $fileRoot = $localRepo . $fileName;
  //obtiene el archivo y lo transforma a bytes
  $contents = file_get_contents($fileRoot);

  $curso ="java";
  //Carga los parametros del WS
  // cargar los parametos y que se llamen igual a los de java
  $data = [
  'nombreArchivo' => $Originalfilename,
  'data'   => $contents,
  'curso'=> $curso
  ];

  /*Llama al servicio indicando el nombre del servicio, como le pusimos en el add y el nombre del metodo del servicio web*/
  $this->soapWrapper->call('video.subir', $data);


  }

  // devolviendo el mensaje de que se subio correctamente
  Session::flash('success', 'Upload successfully');
  return Redirect::to('uploadVideo');
  }
  else {
  // en caso de que el tipo de archivo sea invalido
  return Redirect::back()->withErrors(['msg', 'Tipo de archivo invalido']);

  }

  }



  /*Funcion que hace la descarga de archivos*/
  public function download(Request $request){
  //setea un tiempo limite para descargar 300 segundos = 5 minutos
  set_time_limit(300);
  ini_set('memory_limit', '-1');
  //obtiene de pantalla el archivo que se quiere descargar
  $filename = $request->input('nombre');

  //agrega el servicio con el nombre video y utiliza el wsdl para traerse la ruta
  $this->soapWrapper->add('video', function ($service) {
  $service->wsdl("http://localhost:9999/MtomStreamingService?wsdl");
  $service->trace(true);                                                   // Optional: (parameter: true/false)
  $service->cache(WSDL_CACHE_NONE);                                        // Optional: Set the WSDL cache

  });

  //cargar los parametros para el metodo del WS
  $data = [
  'nombreArchivo' => $filename,
  'arg1'   => 3,
  ];


  /*Llama al servicio indicando el nombre del servicio, como le pusimos en el add y el nombre del metodo del servicio web*/
  $resultado = $this->soapWrapper->call('video.descargar', $data);

  //transforma el archivo de bytes a un archivo fisico
  $file = file_put_contents($filename, $resultado->return);
  //indica una ruta temporal para el archivo
  $filepath =  $filename;
  // lo pasamos para descarga por navegador
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="' . $filename . '"');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($filepath));
  //limpiamos cualquier buffering extra
  while (ob_get_level()) {
  ob_end_clean();
  }
  //leemos el archivo
  readfile($filename);

  }


  /*Funcion que se encarga de reproducir el video en un reproductor de HTML5*/
  public function play(Request $request){
  //setea un tiempo limite para descargar 300 segundos = 5 minutos
  set_time_limit(300);

  ini_set('memory_limit', '-1');
  //obtiene de pantalla el archivo que se quiere descargar
  $filename = $request->input('nombre');

  //agrega el servicio con el nombre video y utiliza el wsdl para traerse la ruta
  $this->soapWrapper->add('video', function ($service) {
  $service->wsdl("http://localhost:9999/MtomStreamingService?wsdl");
  $service->trace(true);                                                   // Optional: (parameter: true/false)
  $service->cache(WSDL_CACHE_NONE);                                        // Optional: Set the WSDL cache

  });

  //cargar los parametros para el metodo del WS
  $data = [
  'nombreArchivo' => $filename,
  'arg1'   => 3,
  ];


  /*Llama al servicio indicando el nombre del servicio, como le pusimos en el add y el nombre del metodo del servicio web*/
  $resultado = $this->soapWrapper->call('video.descargar', $data);


  //transforma el archivo de bytes a un archivo fisico
  $file = file_put_contents($filename, $resultado->return);

  $extension = "mp4";
  $tmpName = rand(11111,99999).'.'.$extension;
  //lo almacena para reproducir en el storage de laravel local
  Storage::put($tmpName, $resultado->return);


  //le envia el parametro al reproductor para indicar cual debe reproducir
  $parameters = [
  'file' => $tmpName
  ];
  /*llama a la pagina de reproduccion de video*/
  return view('content/webservice/videoPlayer', $parameters);

  }



  public function getVideo(string $file)
  {
  $name = $file;
  /*Obtiene la ruta del storage y le concatena el app para indicar cual archivo debe
  hacer por streaming*/
  //echo storage_path() . "\\app\\" . $name;
  $stream = new VideoStream(storage_path() . "\\app\\" . $name);
  $stream->start();
  }



  }
