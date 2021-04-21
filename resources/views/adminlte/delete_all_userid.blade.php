@extends('adminlte.nav_admin')

@section('content')
 
  
 
 


	<br>
		<table class="table" width="80%">
		<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><span class="badge badge-secondary delete">Delete All Check Users</span></li>
  </ol>
</nav>
			<thead>
			
				<tr>
					<th class="text-center">#ID</th>
					<th class="text-center">User ID</th>
					<th class="text-center"> <input type="checkbox" id="checkAll"> Select All</th>
					<th>
					<form method="post" action="{{url('deletealluserid')}}">
		@csrf 
		<br>
        <ul class="list-group" >
		
 		<input class="btn btn-success" type="submit" name="submit" value="Delete All Users"/>
 	 
	 </ul>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=1;
				foreach ($check_view as $check) {
				 
					?>
					<tr>
 						<td class="text-center">{{$check['id'] }}</td>
 						<td class="text-center">{{$check['user_id'] }}</td>
						<td class="text-center"><input name='id[]' type="checkbox" id="checkItem" 
                         value="<?php echo $check->id; ?>">
						</tr>
						<?php $i++; }?>
					</tbody>
				</table>
				<br>
			</form>
 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
		<script language="javascript">
			$("#checkAll").click(function () {
				$('input:checkbox').not(this).prop('checked', this.checked);
			});
		</script>
	
@endsection

