<!DOCTYPE html>
<html>
<head>
    <title>API Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Danh sách bài viết</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                </tr>
            </thead>
            <tbody>
                @if(is_array($data) && count($data) > 0)
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item['userId'] }}</td>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['title'] }}</td>
                            <td>{{ $item['body'] }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No data available.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html> 