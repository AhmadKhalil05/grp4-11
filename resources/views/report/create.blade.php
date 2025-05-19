<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create report</h1>
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
    <form method="post" action="{{route('report.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="report_type">Report_type</label>
            <input type="text" name="Report_type" placeholder="Report_type" id="report_type"  />
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" name="Content" id="content" placeholder="Content"  />
        </div>
        
        <div>
            <input type="submit" value="Save a New Report" />
        </div>
    </form>
</body>
</html>