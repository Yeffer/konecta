	$(document).ready(function(){
		// recuperar datos de la tabla productos..
	   	function loadTableData(){
	       $.ajax({
	           url : "assets/view/ver.php",
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
	           url : "../view/venta_ver.php",
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
					url : "../controller/accion.php",
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
				$.ajax({
					url :"assets/controller/borrar.php",
					type:"POST",
					cache:false,
					data:{borrarId:id},
					success:function(data){
						if (data == 1) {							
							alert("Registro de producto eliminado correctamente");
							location.reload();	
						}else{
							alert("Identificación de producto inválida");
							location.reload();
						}
					}
				});
			}
		});

	
		$(document).on("click",".venta-btn",function(){
			if (confirm("¿Estás seguro que desea vender el producto?")) {
				var id = $(this).data('id');
				var cantidad = $("#cantidad").val();
				console.log(cantidad);
				$.ajax({
					url :"../controller/vender.php",
					type:"POST",
					cache:false,
					data: {ventaId:id, cantidad:cantidad},
					success:function(data){
						if (data == 1) {							
							alert("Producto vendido correctamente");	
							location.reload();
						}else{
							alert("Cantidad de compra mayor a cantidad productos o menor a cero.");		
							location.reload();					
						}
					}
				});
			}
		});

		// Edite el registro a mysqli desde php usando jquery ajax
		$(document).on("click",".editar-btn",function(){
			var id = $(this).data('id');
			$.ajax({
				url :"assets/view/extraer.php",
				type:"POST",
				cache:false,
				data:{editarId:id},
				success:function(data){
					$("#editarForm").html(data);
				},
			});
		});

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
				url:"assets/controller/actualizar.php",
				type:"POST",
				cache:false,
				data:{editar_id:editar_id,nombre:nombre,referencia:referencia,precio:precio,peso:peso,categoria:categoria,cantidad:cantidad},
				success:function(data){
					if (data ==1) {
						alert("Registro de producto actualizado correctamente");
						loadTableData();
					}else{
						alert("Algo salió mal");
						location.reload();	
					}
				}
			});
		});		
	});
