
<div class="max-w-5xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Products</h1>
        <button wire:click="create"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg px-4 py-2 transition">
            + Add Product
        </button>
    </div>

    @if($showModal)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4"
         wire:click.self="resetForm">
        <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">
                {{ $productId ? 'Edit Product' : 'New Product' }}
            </h2>
            <form wire:submit="save" class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Name</label>
                    <input type="text" wire:model="name"
                        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Price</label>
                    <input type="number" step="0.01" wire:model="price"
                        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('price') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1">Quantity</label>
                    <input type="number" wire:model="quantity"
                        class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('quantity') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div class="flex justify-end gap-2 pt-2">
                    <button type="button" wire:click="resetForm"
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg px-4 py-2">Cancel</button>
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg px-4 py-2">
                        {{ $productId ? 'Update' : 'Create' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Search products..."
            class="w-full md:w-1/3 rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
    </div>
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-gray-600 text-sm uppercase">
                <tr>
                    <th class="px-5 py-3">Name</th>
                    <th class="px-5 py-3">Price</th>
                    <th class="px-5 py-3">Qty</th>
                    <th class="px-5 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($products as $product)
                    <tr wire:key="{{ $product->id }}" class="hover:bg-gray-50">
                        <td class="px-5 py-3 font-medium text-gray-800">{{ $product->name }}</td>
                        <td class="px-5 py-3 text-gray-600">${{ number_format($product->price, 2) }}</td>
                        <td class="px-5 py-3">
                            <span class="px-2 py-1 text-xs rounded-full {{ $product->quantity > 0 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $product->quantity }}
                            </span>
                        </td>
                        <td class="px-5 py-3 text-right space-x-2">
                            <button wire:click="edit({{ $product->id }})"
                                class="text-indigo-600 hover:bg-indigo-50 rounded-md px-3 py-1 text-sm">Edit</button>
                            <button wire:click="delete({{ $product->id }})" wire:confirm="Delete this product?"
                                class="text-red-600 hover:bg-red-50 rounded-md px-3 py-1 text-sm">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-8 text-center text-gray-400">No products found</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">{{ $products->links() }}</div>
</div>