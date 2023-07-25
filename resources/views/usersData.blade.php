
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <!-- header ravikant -->
    @include('layouts.indexl')
<!-- header end -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-72 py-4 px-4 mt-8 mr-8 mb-8">
        <!-- Table content goes here -->
    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                     Image
                </th>
            <th scope="col" class="px-6 py-3">
                     Id
                </th>
                <th scope="col" class="px-6 py-3">
                     Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <!-- <th scope="col" class="px-6 py-3">
                    Password
                </th> -->
                <th scope="col" class="px-6 py-3 ">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
@foreach($result as $row)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
            <td class="px-6 py-4">
           <!-- {{$row->image}} -->
            <img src="{{url('/'.$row->image)}} "class="h-12 w-12 rounded-full overflow-hidden " alt=""/>
                    
                </td>
                <td class="px-6 py-4">
                {{$row->id}}
                </td>    
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$row->name}}
                </th>
                <td class="px-6 py-4">
                    {{$row->email}}
                </td>
                <td class="px-6 py-4">
                    {{$row->age}}
                </td>
               
                <td class="px-6 py-4 text-right">
                    <a href="edit/{{$row->id}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="delete/{{$row->id}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
           
            @endforeach
        </tbody>
    </table>
    <div class="row">
            {{$result->links()}}
    </div>

    </div>
</body>
</html>
    
 


