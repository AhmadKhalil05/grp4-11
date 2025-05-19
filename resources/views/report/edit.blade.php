<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>edit report</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    </div>
    <form method="post" action="{{route('report.update', ['report' => $report])}}">
        @csrf
        @method('put')
          
            <label>User_id</label>
            <input type="number" name="User_id" placeholder="User_id"  value="{{$report->User_id}}"/>
        </div>
        <div>
            <label>Report_type</label>
            <input type="text" name="Report_type" placeholder="Report_type"  value="{{$report->Report_type}}" />
        </div>
        <div>
            <label>Content</label>
            <input type="text" name="Content" placeholder="Content"  value="{{$report->Content}}"/>
        </div>
        
        <div>
            <input type="submit" value="update" />
        </div>
    </form>
</body>
</html>