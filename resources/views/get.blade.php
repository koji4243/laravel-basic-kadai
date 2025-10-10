<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel課題</title>
</head>

<body>
    <style>
        div{
            text-align: center;
        }
        .btn{
            background-color: blue;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer; 
        }
    </style>
<div>
    <form action="{{ route('posts.create') }}" method="get">
        @csrf
        <input type="submit" value="投稿作成" class="btn">
    </form>
</div>
    <table>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>内容</th>
            <th>作成日時</th>
            <th>更新日時</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>            
        @endforeach       
    </table>
</body>

</html>