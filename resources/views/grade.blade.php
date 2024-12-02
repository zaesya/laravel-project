<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-rounded border-gray-200 rounded-lg shadow-lg font-mono">
            <thead class="bg-gradient-to-r from-blue-300 to-purple-400 text-white rounded-t-lg">
                <tr>
                    <th class="py-3 px-5 text-left rounded-tl-lg">ID</th>
                    <th class="py-3 px-5 text-left">Department</th>
                    <th class="py-3 px-5 text-left">Grade</th>
                    <th class="py-3 px-5 text-left">Student</th>
                    
                </tr>
            </thead>
            <tbody class="rounded-b-lg">
                @foreach ($grade as $grade)
                <tr class="bg-gray-50 hover:bg-blue-100 transition-colors duration-200">
                    <td class="py-3 px-5 border-t">{{ $grade->id }}</td>
                    <td class="py-3 px-5 border-t">{{ $grade->Department->name }}</td>
                    <td class="py-3 px-5 border-t">{{ $grade->name }}</td>
                    <td class="py-3 px-5 border-t">
                        @foreach ($grade->students as $student)
                        
                           <li> {{ $student->name }} </li>
                        
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>