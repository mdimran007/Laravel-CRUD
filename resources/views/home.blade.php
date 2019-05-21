<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

   
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Simple Laravel CRUD Operation</h1>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		
		<div class="table table-responsive">
			<table class="table table-bordered" id="table">

				<tr>
					<th width="150px">SN</th>
					<th>Name</th>
					<th>Roll</th>
					<th>Address</th>
					<th width="150px" class="text-center">
						<a href="" class="create-modal btn btn-success btn-sm">
							<i class="glyphicon glyphicon-plus"></i>Add New
						</a>
					</th>
				</tr>

				
					 <?php
                        $i=0;
                     ?>

					
					@foreach($allStudent as $singleStudent)
					<tr>
					<td>{{ ++$i }}</td>
					<td>{{$singleStudent->name}}</td>
					<td>{{$singleStudent->roll}}</td>
					<td>{{$singleStudent->address}}</td>
					 <td>
            <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$singleStudent->id}}" data-name="{{$singleStudent->name}}" data-roll="{{$singleStudent->roll}}">
              <i class="fa fa-eye"></i>
            </a>
            <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$singleStudent->id}}" data-title="{{$singleStudent->name}}" data-body="{{$singleStudent->roll}}">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>
            <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$singleStudent->id}}" data-title="{{$singleStudent->name}}" data-body="{{$singleStudent->roll}}">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
          </tr>
					@endforeach
				
				
			</table>
		</div>

	</div>
</div>


{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">ID :</label>
                      <b id="i"/>
                    </div>
                    <div class="form-group">
                      <label for="">Name :</label>
                      <b id="ti"/>
                    </div>
                    <div class="form-group">
                      <label for="">Roll :</label>
                      <b id="by"/>
                    </div>
                    </div>
                    </div>
                  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">

// Show function
  $(document).on('click', '.show-modal', function() {
  $('#show').modal('show');
  $('#i').text($(this).data('id'));
  $('#ti').text($(this).data('name'));
  $('#by').text($(this).data('roll'));
  $('.modal-title').text('Student View');
  });
</script>

</body>
</html>