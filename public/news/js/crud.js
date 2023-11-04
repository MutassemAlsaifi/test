function store(url , data){
    axios.post(url , data)
.then(function(response){
    new swal(response.data);
clearForm();
clearAndHideErrors();
})
    .catch(function(error){
        if(error.response.data.errors !== undefined){
            showErrorMessages(error.response.data.errors)
        }
else{
   new swal(error.response.data);

}
    })
}

function storeRoute(url, data) {
    axios.post(url, data, {
        headers: {
            'Content-Type': 'multipart/form-data'
        }

    })

    .then(function(response) {
        window.location = '/admin/counties';
    })

    .catch(function(error) {
        if (error.response.data.errors !== undefined) {
            showErrorMessages(error.response.data.errors);
        } else {
            if(error.response.data.message === undefined)
            new swal(error.response.data);
        else{
            window.location = '/admin/counties';

        }
        }
    });

}


function confirmDestroy(url, td) {
    Swal.fire({
title : 'are you sure , you want to destroy ?',
text : "you can't to return the data ?",
icon :'warning',

showCancelButton :true,
confirmButtonColor :'#3085d6',
cancelButtonColor :'#d33',
confirmButtonText :'YES',
cancelButtonText :'NO',
})
.then((result) => {
    if(result.isConfirmed){
destroy(url, td)
Swal.fire({
    position:'center',
    icon:'success',
    title:'the data was successfully destroyed',
    showCancelButton :false,
    timer:1500,

})
    }
})

}
function destroy(url, td){
axios.delete(url)
.then(function(response) {
    td.closest('tr').remove();
})
.catch(function(error) {

}
)
}
