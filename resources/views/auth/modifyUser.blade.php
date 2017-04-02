@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('IDENTIFICACION') ? ' has-error' : '' }}">
                            <label for="IDENTIFICACION" class="col-md-4 control-label">Identificaci&oacute;n</label>

                            <div class="col-md-6">
                                <input id="IDENTIFICACION" type="text" class="form-control" name="IDENTIFICACION" value="{{ old('IDENTIFICACION') }}" required>

                                @if ($errors->has('IDENTIFICACION'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('IDENTIFICACION') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('GENERO') ? ' has-error' : '' }}">
                            <label for="GENERO" class="col-md-4 control-label">Genero</label>
                            <div class="col-md-6">
                                <select class="form-control" id="GENERO" class="form-control" name="GENERO" value="{{ old('GENERO') }}" required>
                                  <option>Masculino</option>
                                  <option>Femenino</option>
                                  <option>Otro</option>
                                </select>
                                        @if ($errors->has('GENERO'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('GENERO') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('PAIS') ? ' has-error' : '' }}">
                            <label for="PAIS" class="col-md-4 control-label">Pa&iacute;s</label>
                            <div class="col-md-6">
                                <select class="form-control" id="PAIS" class="form-control" name="PAIS" value="{{ old('PAIS') }}" required>
                                  <option>Costa Rica</option>
                                  <option>Afganistán</option>
                                  <option>Albania</option>
                                  <option>Alemania</option>
                                  <option>Andorra</option>
                                  <option>Angola</option>
                                  <option>Antigua y Barbuda</option>
                                  <option>Arabia Saudita</option>
                                  <option>Argelia</option>
                                  <option>Argentina</option>
                                  <option>Armenia</option>
                                  <option>Australia</option>
                                  <option>Austria</option>
                                  <option>Azerbaiyán</option>
                                  <option>Bahamas</option>
                                  <option>Bangladés</option>
                                  <option>Barbados</option>
                                  <option>Baréin</option>
                                  <option>Bélgica</option>
                                  <option>Belice</option>
                                  <option>Benín</option>
                                  <option>Bielorrusia</option>
                                  <option>Birmania</option>
                                  <option>Bolivia</option>
                                  <option>Bosnia-Herzegovina</option>
                                  <option>Botsuana</option>
                                  <option>Brasil</option>
                                  <option>Brunéi</option>
                                  <option>Bulgaria</option>
                                  <option>Burkina Faso</option>
                                  <option>Burundi</option>
                                  <option>Bután</option>
                                  <option>Cabo Verde</option>
                                  <option>Camboya</option>
                                  <option>Camerún</option>
                                  <option>Canadá</option>
                                  <option>Catar</option>
                                  <option>Chad</option>
                                  <option>Chile</option>
                                  <option>China</option>
                                  <option>Chipre</option>
                                  <option>Colombia</option>
                                  <option>Comoras</option>
                                  <option>Congo</option>
                                  <option>Corea del Norte</option>
                                  <option>Corea del Sur</option>
                                  <option>Costa de Marfil</option>
                                  <option>Costa Rica</option>
                                  <option>Croacia</option>
                                  <option>Cuba</option>
                                  <option>Dinamarca</option>
                                  <option>Dominica</option>
                                  <option>Ecuador</option>
                                  <option>Egipto</option>
                                  <option>El Salvador</option>
                                  <option>Emiratos Árabes Unidos</option>
                                  <option>Eritrea</option>
                                  <option>Eslovaquia</option>
                                  <option>Eslovenia</option>
                                  <option>España</option>
                                  <option>Estados Unidos</option>
                                  <option>Estonia</option>
                                  <option>Etiopía</option>
                                  <option>Filipinas</option>
                                  <option>Finlandia</option>
                                  <option>Fiyi</option>
                                  <option>Francia</option>
                                  <option>Gabón</option>
                                  <option>Gambia</option>
                                  <option>Georgia</option>
                                  <option>Ghana</option>
                                  <option>Granada</option>
                                  <option>Grecia</option>
                                  <option>Guatemala</option>
                                  <option>Guinea</option>
                                  <option>Guinea Ecuatorial</option>
                                  <option>Guinea-Bisáu</option>
                                  <option>Guyana</option>
                                  <option>Haití</option>
                                  <option>Honduras</option>
                                  <option>Hungría</option>
                                  <option>India</option>
                                  <option>Indonesia</option>
                                  <option>Irak</option>
                                  <option>Irán</option>
                                  <option>Irlanda</option>
                                  <option>Islandia</option>
                                  <option>Islas Marshall</option>
                                  <option>Islas Salomón</option>
                                  <option>Israel</option>
                                  <option>Italia</option>
                                  <option>Jamaica</option>
                                  <option>Japón</option>
                                  <option>Jordania</option>
                                  <option>Kazajistán</option>
                                  <option>Kenia</option>
                                  <option>Kirguistán</option>
                                  <option>Kiribati</option>
                                  <option>Kosovo</option>
                                  <option>Kuwait</option>
                                  <option>Laos</option>
                                  <option>Lesoto</option>
                                  <option>Letonia</option>
                                  <option>Líbano</option>
                                  <option>Liberia</option>
                                  <option>Libia</option>
                                  <option>Liechtenstein</option>
                                  <option>Lituania</option>
                                  <option>Luxemburgo</option>
                                  <option>Macedonia</option>
                                  <option>Madagascar</option>
                                  <option>Malasia</option>
                                  <option>Malaui</option>
                                  <option>Maldivas</option>
                                  <option>Malí</option>
                                  <option>Malta</option>
                                  <option>Marruecos</option>
                                  <option>Mauricio</option>
                                  <option>Mauritania</option>
                                  <option>México</option>
                                  <option>Micronesia</option>
                                  <option>Moldavia</option>
                                  <option>Mónaco</option>
                                  <option>Mongolia</option>
                                  <option>Montenegro</option>
                                  <option>Mozambique</option>
                                  <option>Namibia</option>
                                  <option>Nauru</option>
                                  <option>Nepal</option>
                                  <option>Nicaragua</option>
                                  <option>Níger</option>
                                  <option>Nigeria</option>
                                  <option>Noruega</option>
                                  <option>Nueva Zelanda</option>
                                  <option>Omán</option>
                                  <option>Países Bajos</option>
                                  <option>Pakistán</option>
                                  <option>Palaos</option>
                                  <option>Palestina</option>
                                  <option>Panamá</option>
                                  <option>Papúa Nueva Guinea</option>
                                  <option>Paraguay</option>
                                  <option>Perú</option>
                                  <option>Polonia</option>
                                  <option>Portugal</option>
                                  <option>Reino Unido</option>
                                  <option>República Centroafricana</option>
                                  <option>República Checa</option>
                                  <option>República Democrática del Congo</option>
                                  <option>República Dominicana</option>
                                  <option>Ruanda</option>
                                  <option>Rumania</option>
                                  <option>Rusia</option>
                                  <option>Samoa</option>
                                  <option>San Cristóbal y Nieves</option>
                                  <option>San Marino</option>
                                  <option>San Vicente y las Granadinas</option>
                                  <option>Santa Lucía</option>
                                  <option>Santo Tomé y Príncipe</option>
                                  <option>Senegal</option>
                                  <option>Serbia</option>
                                  <option>Seychelles</option>
                                  <option>Sierra Leona</option>
                                  <option>Singapur</option>
                                  <option>Siria</option>
                                  <option>Somalia</option>
                                  <option>Sri Lanka</option>
                                  <option>Suazilandia</option>
                                  <option>Sudáfrica</option>
                                  <option>Sudán</option>
                                  <option>Sudán del Sur</option>
                                  <option>Suecia</option>
                                  <option>Suiza</option>
                                  <option>Surinam</option>
                                  <option>Tailandia</option>
                                  <option>Taiwán</option>
                                  <option>Tanzania</option>
                                  <option>Tayikistán</option>
                                  <option>Timor Oriental</option>
                                  <option>Togo</option>
                                  <option>Tonga</option>
                                  <option>Trinidad y Tobago</option>
                                  <option>Túnez</option>
                                  <option>Turkmenistán</option>
                                  <option>Turquía</option>
                                  <option>Tuvalu</option>
                                  <option>Ucrania</option>
                                  <option>Uganda</option>
                                  <option>Uruguay</option>
                                  <option>Uzbekistán</option>
                                  <option>Vanuatu</option>
                                  <option>Vaticano</option>
                                  <option>Venezuela</option>
                                  <option>Vietnam</option>
                                  <option>Yemen</option>
                                  <option>Yibuti</option>
                                  <option>Zambia</option>
                                  <option>Zimbabue</option>
                                </select>
                                        @if ($errors->has('PAIS'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PAIS') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('LENGUAJE') ? ' has-error' : '' }}">
                            <label for="LENGUAJE" class="col-md-4 control-label">Lenguaje</label>
                        <div class="col-md-6">
                            <select class="form-control" id="LENGUAJE" class="form-control" name="LENGUAJE" value="{{ old('LENGUAJE') }}" required>
                              <option>Espa&ntilde;ol</option>
                              <option>Ingl&eacute;s</option>
                              <option>Franc&eacute;s</option>
                            </select>
                                    @if ($errors->has('LENGUAJE'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('LENGUAJE') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modify
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
