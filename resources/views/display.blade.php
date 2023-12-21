<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  

    

<h1>Product List</h1>


{{-- DELETE MODAL --}}

<div class="modal" tabindex="-1" id="deleteModal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Product?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <p>Are you sure you want to Delete this Product?</p>
        <label for="ID"></label>
        <input type="hidden"   id="delete_pdc" disabled  placeholder="Product name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_btn" >Delete</button>
      </div>
    </div>
  </div>
</div>

{{-- END DELETE MODAL --}}







{{-- Edit --}}
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editDataLabel">Edit Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  id="editDataForm">
          @csrf
          {{method_field('PUT')}}
        <div class="modal-body">
        
          <div class="form-group mb-3">
            <label for="ID"></label>
            <input type="hidden"  class="input form-control"  name="id" id="id"  placeholder="Product name">
        </div>


                <div class="form-group mb-3">
                    <label for="Product">Product</label>
                    <input type="text"  class="input form-control"  name="Pname" id="Pname"  placeholder="Product name">
                </div>

                

                <div class="form-group mb-3">
                    <label for="Product">Product Description</label>
                    <input type="text" class="input form-control"  name="description" id="description"  placeholder="Product Description">
                </div>

                
                <div class="form-group mb-3 ">
                    <label for="Product">Price</label>
                    <input type="number" class="input form-control" name="price" id="price"  placeholder="Product Price">
                </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit"  name="edit_data" class="btn btn-primary ">Update Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>
{{-- Edit --}}

<!-- INSERT -->
<div class="modal fade" id="insertData" tabindex="-1" aria-labelledby="insertDataLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="insertDataLabel">Add Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" id="insertProduct">
          @csrf
        <div class="modal-body">
        
                <div class="form-group mb-3">
                    <label for="Product">Product</label>
                    <input type="text"  class="input form-control"  name="Addpname" id="addPname" placeholder="Product name">
                </div>

                

                <div class="form-group mb-3">
                    <label for="Product">Product Description</label>
                    <input type="text" class="input form-control"  name="addDescription" id="addDescription"placeholder="Product Description">
                </div>

                
                <div class="form-group mb-3 ">
                    <label for="Product">Price</label>
                    <input type="number" class="input form-control" name="addPrice" id="addPrice" placeholder="Product Price">
                </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit"  name="save_data" class="btn btn-primary">Save Data</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<table style="width: 100%; text-align: center" border="1" id="dataTable" class="table table-success table-striped">
    <button type="button" id="add_user" class="btn btn-primary float-end mb-3" data-bs-toggle="modal" data-bs-target="#insertData" > 
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="white" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
      </svg> INSERT DATA
      </button>
    <tr>
        <th data-field="id" data-sortable="true">ID</th>
        <th data-field="pname" data-sortable="true">Product name</th>
        <th data-field="description" data-sortable="true">Product Description</th>
        <th data-field="Price" data-sortable="true">Price</th>
        <th data-field="Price" data-sortable="true">Edit</th>
     
    </tr>

    @foreach($data as $value)
<tr class="productID">
    
    <td>{{$value->id}}</td>
    <td>{{$value->Pname}}</td>
    <td>{{$value->description}}</td>
    <td>{{$value->Price}}</td>
  
    <td><button type="button" data-id="{{$value->id}}" data-pname="{{$value->Pname}}"  data-description="{{$value->description}}"  data-price="{{$value->Price}}" class="btn btn-info editBtn mb-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="Red" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>Edit</button>
    <button type="button" class="btn btn-danger mb-2 mr-4 btn btn-primary float-end mb-3 deleteAction bi bi-archive-fill"  data-id="{{$value->id}}" >Delete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
      <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
    </svg></button>
  </td>

</tr>
@endforeach
</table>

    
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>


<script>




$(document).ready(function(){

  $('.deleteAction').on('click',function(e){
            e.preventDefault();
            $('#deleteModal').modal('show');
            let id = $(this).attr("data-id")
            $('#delete_pdc').val(id); 
  });

  $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();
            var id = $('#delete_pdc').val();

            $.ajax({
                type:"POST",
                url: "/ProductDelete" ,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {id: id},
                dataType: "json",
            success: function(response){
              location.reload();
              console.log(response);
             
              $('#success_message').text(response.message);
              $('#deleteModal').modal('hide');
              
              }
            });

  })


  $('.editBtn').on('click',function(){
            let id = $(this).attr("data-id")
            let pname = $(this).attr("data-pname")
            let description = $(this).attr("data-description")
            let Price = $(this).attr("data-Price")
            

            

            $('#id').val(id);
            $('#Pname').val(pname);
            $('#description').val(description);
            $('#price').val(Price);

            
            $('#editData').modal('show');
  });


  $('#editDataForm').on('submit', function(e){
    e.preventDefault();

        var id = $('#id').val();
        var Pname = $('#Pname').val();
        var description = $('#description').val();
        var price = $('#price').val();
        $('#editData').modal('hide');

        
    $.ajax({
            type:"POST",
            url: "/ProductUpdate",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id: id,Pname: Pname, description:description, price:price},
            dataType: "json",
            success: function(response){
              window.location.reload();
              console.log(response);
             
              $('#success_message').text(response.message);
              $('#deleteModal').modal('hide');
              
              }
        });

  })

  $("#insertProduct").submit(function(event){
          event.preventDefault()
        $('add_user').text('adding...');

         

           var Pname = $('#addPname').val();
           var description = $('#addDescription').val();
           var price = $('#addPrice').val();
                                            
            $.ajax({
            type:"POST",
            url: "/Product",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data:{Pname: Pname, description:description, price:price},
            dataType: "json",
            success: function(response){
              window.location.reload();
                },
            error: function(data) {
                
              }
        });
           
        })
});


  











    

</script>
</body>
</html>