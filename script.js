ListarProdutos();

function ListarProdutos(busca) {
    fetch("listar.php", {
        method:"POST",
        body: busca
    }).then(response => response.text()).then(response=> {
        resultado.innerHTML = response;
    })
     
}

document.addEventListener("DOMContentLoaded", () => {
    const registrar = document.getElementById("registrar");
    const frm = document.getElementById("frm");


    registrar.addEventListener("click", () => {
        fetch("registrar.php", {
            method: "POST",
            body: new FormData(frm)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.text();
        })
        .then(response => {
            console.log(response);
            if (response =="ok") { 
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Registrado",
                    showConfirmButton: false,
                    timer: 1500
                });
                document.getElementById("frm").reset() ;
                ListarProdutos();
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Modificado",
                    showConfirmButton: false,
                    timer: 1500
                });
                document.getElementById("frm").reset() ;
                ListarProdutos();
            }
            
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Erro",
                text: error.message,
                showConfirmButton: true
            });
        });
    });
});

function Eliminar(id) {
    Swal.fire({
        title: "Voce quer eliminar esse produto?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim",
        cancelButtonText: "Nao"
      }).then((result) => {
        if (result.isConfirmed) {
            fetch("eliminar.php", {
                method: "POST",
                body: id
            }).then(response => response.text()).then(response => {
                if (response =="ok") {
                    ListarProdutos();
                    Swal.fire({
                        icon: "success",
                        title: "Eliminado",
                        showConfirmButton: false,
                        timer: 1500
                    });                
                }

            })
      
        }
      });

}

function Editar(id) {
    fetch("editar.php", {
        method: "POST",
        body: id
    }).then(response => response.json()).then(response => {
        idp.value = response.id;
        codigo.value = response.codigo;
        produto.value = response.produto;
        preco.value = response.preco;
        quantidade.value = response.quantidade;
        registrar.value = "Atualizar";
    })
}

buscar.addEventListener("keyup", () => {

    const valor= buscar.value;

    if (valor =="") {
        ListarProdutos();

    }else {
        ListarProdutos(valor);
    }
});


