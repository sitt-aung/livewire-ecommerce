<div class="space-y-6">
    @if ($initialVariations)
        <livewire:product-dropdown :variations="$initialVariations" />
    @endif

    @if ($skuVariant)
        <div class="space-y-6">
            <div class="font-semibold text-lg">
                {{ $skuVariant->formattedPrice() }}
            </div>

            <x-primary-button wire:click.prevent="addToCart">Add to cart</x-primary-button>
        </div>
    @endif
</div>
