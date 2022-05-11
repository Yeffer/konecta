	$(document).ready(function(){
		// recuperar datos de la tabla productos..
	   	function loadTableData(){
	       $.ajax({
	           url : "ver.php",
	           type : "POST",
	           success:function(data){
	              $("#tableData").html(data);
	           }
	       });
	   	}
	   	loadTableData();
	   	// recuperar datos de la tabla productos venta..
	   	function loadTableDataVenta(){
	       $.ajax({
	           url : "venta_ver.php",
	           type : "POST",
	           success:function(data){
	              $("#tableDataVenta").html(data);
	           }
	       });
	   	}
	   	loadTableDataVenta();
		$("#registro").click(function(e){
			e.preventDefault();
			var nombre = $("#nombre").val();
			var referencia = $("#referencia").val();
			var precio = $("#precio").val();
			var peso = $("#peso").val();
			var categoria = $("#categoria").val();
			var cantidad = $("#stock").val();
			 
			if(nombre !=="" && referencia !=="" && precio !=="" && peso !=="" && peso !=="" && cantidad !==""){
				$.ajax({
					url : "accion.php",
					type: "POST",
					cache: false,
					data : {nombre:nombre,referencia:referencia,precio:precio, peso:peso, categoria:categoria, stock:cantidad},
					success:function(data){
						alert("Datos insertados correctamente");
						$("#clienteForm")[0].reset();
						loadTableData();
					},
				});
			}else{
				alert("Todos los campos son obligatorios");
			}
		});	

		// Eliminar registro a MySql desde PHP usando jQuery AJAX
		$(document).on("click",".borrar-btn",function(){
			if (confirm("¿Estás seguro de eliminar el producto?")) {
				var id = $(this).data('id');
				var element = this;
				$.ajax({
					url :"borrar.php",
					type:"POST",
					cache:false,
					data:{borrarId:id},
					success:function(data){
						if (data == 1) {
							$(element).closest("tr").fadeOut();
							alert("Registro de producto eliminado correctamente");	
						}else{
							alert("Identificación de producto inválida");
						}
					}
				});
			}
		});

	
		$(document).on("click",".venta-btn",function(){
			if (confirm("¿Estás seguro que desea vender el producto?")) {
				var id = $(this).data('id');
				var cantidad = $(this).data('cantidad');
				var element = this;
				$.ajax({
					url :"vender.php",
					type:"POST",
					cache:false,
					data:{ventaId:id},
					data : {ventaId:id,cantidad:cantidad},
					success:function(data){
						if (data == 1) {
							$(element).closest("tr").fadeOut();
							alert("Registro de producto vendido correctamente");	
						}else{
							alert("Identificación de producto inválida");
						}
					}
				});
			}
		});


		// Edite el registro a mysqli desde php usando jquery ajax
		$(document).on("click",".editar-btn",function(){
			var id = $(this).data('id');
			$.ajax({
				url :"extraer.php",
				type:"POST",
				cache:false,
				data:{editarId:id},
				success:function(data){
					$("#editarForm").html(data);
				},
			});
		});
/*
		// Edite el registro a mysqli desde php usando jquery ajax
		$(document).on("click",".venta-btn",function(){
			var id = $(this).data('id');
			$.ajax({
				url :"cantidad_venta.php",
				type:"POST",
				cache:false,
				data:{editarId:id},
				success:function(data){
					$("#ventaForm").html(data);
				},
			});
		});
*/
		// User record update to mysqli from php using jquery ajax
		$(document).on("click","#editarSubmit", function(){
			var editar_id = $("#editarId").val();
			var nombre = $("#editarNombre").val();
			var referencia = $("#editarReferencia").val();
			var precio = $("#editarPrecio").val();
			var peso = $("#editarPeso").val();
			var categoria = $("#editarCategoria").val();
			var cantidad = $("#editarCantidad").val();			
			
			$.ajax({
				url:"actualizar.php",
				type:"POST",
				cache:false,
				data:{editar_id:editar_id,nombre:nombre,referencia:referencia,precio:precio,peso:peso,categoria:categoria,cantidad:cantidad},
				success:function(data){
					if (data ==1) {
						alert("Registro de producto actualizado correctamente");
						loadTableData();
					}else{
						alert("Algo salió mal");	
					}
				}
			});
		});		
	});
