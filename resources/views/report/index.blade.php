<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Report</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('report.create')}}">Create report</a>
        </div>
        <table >
            <tr>
                <th>Report_id</th>
                <th>User_id</th>
                <th>Report_type</th>
                <th>Content</th>
                <th>Generated_at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($reports as $report )
                <tr>
                    <td>{{ $report->report_id}}</td>
                    
                    
                    <td>{{ $report->user_id}}</td>
                    <td>{{ $report->report_type}}</td>
                    <td>{{ $report->content}}</td>
                    <td>{{ $report->generated_at}}</td>
                    
                    <td>
                     
                      <a href="{{ route('report.edit', $report) }}">Edit</a>


                    </td>
                    <td>
                        <form method="post" action="{{route('report.destroy', ['report' => $report])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>