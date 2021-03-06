@php
use App\Models\Setting;
$classDetais=Setting::first();
@endphp
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Marksheet</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<style type="text/css">
		table, th, td {
		   border: 1px solid black;
		}
		table{
			margin-bottom: 10px;


		}
		th, td {
		    padding: 5px;
		}
		body{
			padding: 20px;
		}
		tbody:before, tbody:after { display: none; }
	</style>
</head>

<body>

@foreach($marks as $key=>$rows)
<table width="100%">

	<tr><th colspan="2"><h4> Name of Student : {{$i->stu_first_name}} {{$i->stu_middle_name}} {{$i->stu_last_name}}</h4></th></tr>
	<tr><th colspan="2"><h4> Name of School/College : {{$i->ad_school}} </h4></th></tr>
	<tr><th><h4> Standard : {{$i->std_name}}</h4></th><th><h4> Medium : {{$i->med_name}}</h4></th></tr>

	</table>

  		<table class="table table-bordered" width="100%">
  		<tbody>
  		<tr>
    		<th colspan="11">{{ $classDetais->set_class_name }} </th>
    		<!-- <th ></th> -->
   		</tr>
		<tr>
			@php
				$test_name = explode('-', $key);
	$test_name = $test_name[0];
	@endphp
			<th colspan="11">Test Name:{{$test_name}}</th>
			<!-- <th colspan="2">Date:10-09-2018</th> -->
		</tr>
		<tr>
		<td> Subjects</td>
		<td>Total Marks</td>
		<td>Obtained Marks</td>
	</tr>
@foreach($rows as $row)


		<tr>
			<td>{{$row->sub_name}}</td>
			<td>{{$row->test_outof}}</td>
			<td>{{$row->mark_total}}</td>
		</tr>
@endforeach
</tbody>
	  	</table>

	  	<br>
	  	<br>
@endforeach

</body>
</html>

