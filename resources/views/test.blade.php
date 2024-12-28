<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold leading-tight">User Table</h2>
            
        </div>
        <div class="my-4">
            <div class="overflow-x-auto">
                <table class="min-w-full leading-normal border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">#</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">/td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>