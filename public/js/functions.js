function weeksBetween(d1, d2) {
        return Math.round((d2 - d1) / (7 * 24 * 60 * 60 * 1000));
}
function numberOfWeeks(){
  var dateStart = new Date($("#fecha_inicio").val());
  var dateEnd = new Date($("#fecha_final").val());
  var duracion = weeksBetween(dateStart,dateEnd);
  $("#duracion").val(duracion);
}

  function deleteUser(id) {
      var txt;
      var r = confirm("Realmente desea eliminar el usuario?");
      if (r == true) {
          txt = "/users/deleteUser/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showUsers";

      }

  }

  function updateUser(id) {
      var txt;
      var r = confirm("Realmente desea actualizar el Usuario?");
      if (r == true) {
          txt = "/users/modifyUser/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showUsers";


      }

  }

  function deleteCourse(id) {
      var txt;
      var r = confirm("Realmente desea eliminar el Curso?");
      if (r == true) {
          txt = "/courses/deleteCourse/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showCourses";
      }

  }

  function updateCourse(id) {
      var txt;
      var r = confirm("Realmente desea actualizar el Curso?");
      if (r == true) {
          txt = "/courses/modifyCourse/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showCourses";
      }

  }


  /*AMONTERO*/

  function deleteMatricula(id) {
      var txt;
      var r = confirm("Realmente desea eliminar la matricula?");
      if (r == true) {
          txt = "/enroll/deleteMatricula/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showMatriculas";

      }

  }

  function updateMatricula(id) {
      var txt;
      var r = confirm("Realmente desea modificar la matricula?");
      if (r == true) {
          txt = "/enroll/editMatricula/"+id;
          window.location.replace(txt);
      } else {
          txt = "/showMatriculas";

      }

  }


  /*Metodos para drag and drop*/

  /* when the DOM is ready */
jQuery(document).ready(function() {
	/* grab important elements */
	var sortInput = jQuery('#sort_order');
	var submit = jQuery('#autoSubmit');
	var messageBox = jQuery('#message-box');
	var list = jQuery('#sortable-list');
	/* create requesting function to avoid duplicate code */
	var request = function() {
		$.ajax({
    // En data puedes utilizar un objeto JSON, un array o un query string
    //data: {"sort_order" : sortInput.val(), "do_submit" : 1, "byajax" : 1},
    data:"sort_order=" + sortInput.val() + "&do_submit=1&byajax=1",
    //Cambiar a type: POST si necesario
    type: "GET",
    // Formato de datos que se espera en la respuesta
    //dataType: "json",
    // URL a la que se enviará la solicitud Ajax
    url: "index.php",
 //   contentType: "json",
})
 .done(function( data, textStatus, jqXHR ) {
     if ( console && console.log ) {
     	console.log(jqXHR);
         console.log( "La solicitud se ha completado correctamente." );
     }
 })
 .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
         console.log(jqXHR);

     }
});
	};

	/* worker function */
	var fnSubmit = function(save) {
		var sortOrder = [];

		list.each(function(){
			$(this).children().each(function () {
        	var $currentElement = $(this);
        	if($currentElement.is( "li" )){
        		values = jQuery(this).data('id').split("_");
				sortOrder.push({'nameid':jQuery(this).data('id'), 'id':values[1]});
        	}else{
        		$currentElement.children('li').each(function(){
        			$current = $(this);
        			values = $current.attr('id').split("_");
					sortOrder.push({'nameid':jQuery(this).data('id'), 'id':values[1]});
        		});
        	}
    		});
		});


		sortInput.val($.toJSON(sortOrder)/*sortOrder.join(',')*/);
		console.log(sortInput.val());
		if(save) {
			request();
		}
	};
	/* store values */
	list.children('li').each(function() {
		var li = jQuery(this);
		li.data('id',li.attr('id')).attr('id','');
	});



	/* sortables */
	list.sortable({
		opacity: 0.7,
		update: function() {
			fnSubmit(submit[0].checked);
		}
	});
	list.disableSelection();


/*	list.each(function(){
		$(this).children().each(function () {
        	var $currentElement = $(this);
        	if($currentElement.is( "ul" )){
				$currentElement.sortable({
					opacity: 0.7,
					update: function() {
					fnSubmit(submit[0].checked);
					}
				});
        	}else{
        		$currentElement.sortable({
					opacity: 0.7,
					update: function() {
					fnSubmit(submit[0].checked);
					}
				});
        	}
        	$currentElement.disableSelection();
    	});
		});	*/


	/*	list.nestedSortable({
			listType: 'ul',
			handle: 'div',
			items: 'li',
			toleranceElement: '> div'
		});*/


	/* ajax form submission */
	jQuery('#dd-form').bind('submit',function(e) {
		if(e) e.preventDefault();
		fnSubmit(true);
	});
});

  /*Fin drag and drop*/


  /*Fin AMONTERO*/
