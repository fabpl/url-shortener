<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase">
                {{ __('Uid') }}
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase">
                {{ __('Url') }}
            </th>
            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase">
                {{ __('Actions') }}
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($links as $link)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                    {{ $link->uid }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    {{ $link->url }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <a href="#" wire:click="delete({{ $link->id }})">
                        {{ __('Delete') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="px-4 py-3 border-t border-gray-200 sm:px-6">
        {{ $links->links() }}
    </div>
</div>
