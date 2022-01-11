<tbody class="bg-white divide-y divide-gray-200">
    <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{ $course->name }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{ $course->credits }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500  uppercase">
            {{ $course->duration }}
        </td>
    </tr>
</tbody>
