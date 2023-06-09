<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estiloProductos.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <p>GamerLy</p>
        </div>
        <div class="navbar">
            <a id="login" href="login.html">Login</a>
            <a id="registro" href="registro.html">Registro</a>
            <a id="perfil" href="perfil.html">Perfil</a>
            <a id="admin" href="vistaAdmin.html">Admin</a>
            <a  href="Ubicacion.html">Ubicacion</a>
            <a  href="Principal.html">Principal</a>
            <a  href="Productos.html">Catalogo</a>
            <a href="vistaCarrito.php"><img class="carrito" src="../21310362/imgCatalogo/carro.png" alt=""></a>
        </div>
    </div>
    <div id="productos">

    </div>
    <script>
        window.onload = async ()=>{
            await fetch("revisar_sesion.php",{
                method:"POST",
                headers:{
                    "Content-Type":"application/json"
                },
                body:JSON.stringify({
                    "session_id":localStorage.getItem("session_id"),
                })
            }).then(async (response)=>{
                res= await response.json();
                if(!response.ok){
                    document.getElementById("admin").setAttribute("class","hidden");
                    document.getElementById("perfil").setAttribute("class","hidden");
                    obtenerCatalogo(false);
                    return;
                }
                document.getElementById("login").setAttribute("class","hidden");
                document.getElementById("registro").setAttribute("class","hidden");
                if(res.type!="2"){
                    document.getElementById("admin").setAttribute("class","hidden");
                }
                obtenerCatalogo(true);
                return;
            })
            
        }
        async function obtenerCatalogo (carrito){
            let catalogo = await fetch("catalogo.php",{
                method:"POST",
                headers:{
                    "Content-Type":"application/json"
                },
                body:JSON.stringify({
                    "session_id":localStorage.getItem("session_id"),
                })
            }).then(async (response)=>{
                res= await response.json();
                return res;
            })
            let contenedor = document.getElementById("productos");
            let inner="";
            if(!carrito){
                for(let i=0;i<catalogo.length;i++){
                    inner= inner+`<div class='prod'>
                    <img src='`+catalogo[i].imagen+`'>
                    <p class="corr">`+catalogo[i].nombre+`</p>
                    <p class="corr">`+catalogo[i].precio+`</p>
                    </div>`;
                    contenedor.innerHTML=inner
                }
                return;
                
            }
            for(let i=0;i<catalogo.length;i++){
                    inner= inner+`<div class='prod'>
                    <img src='`+catalogo[i].imagen+`'>
                    <div>
                    <p class="corr">`+catalogo[i].nombre+`</p>
                    <p class="corr">`+catalogo[i].precio+`$</p>
                    <form onsubmit="return viewProduct(`+catalogo[i].id+`)">
                    <input type="submit" class="shop shadow" value="Añadir al carrito">
                    </form>
                    </div>
                    </div>`;
                    contenedor.innerHTML=inner
            }
            return
        }
        async function viewProduct(id){
            await fetch("revisar_sesion.php",{
                method:"POST",
                headers:{
                    "Content-Type":"application/json"
                },
                body:JSON.stringify({
                    "session_id":id,
                })
            }).then(async (response)=>{
                res= await response.json();
                if(!response.ok){
                    document.getElementById("admin").setAttribute("class","hidden");
                    document.getElementById("perfil").setAttribute("class","hidden");
                    obtenerCatalogo(false);
                    return;
                }
                document.getElementById("login").setAttribute("class","hidden");
                document.getElementById("registro").setAttribute("class","hidden");
                if(res.type!="2"){
                    document.getElementById("admin").setAttribute("class","hidden");
                }
                obtenerCatalogo(true);
                return;
            })
            
        }
    </script>   
</body>
</html>
