<div class="flex flex-col gap-6">
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" wire:submit="save" class="flex flex-col gap-6">
        <flux:input
            wire:model="title"
            :label="__('Title')"
            required
            autofocus
            placeholder="The most important sprint title"
        />

        <div class="flex items-center justify-end">
            <flux:button
                variant="primary"
                type="submit"
                class="hover:bg-accent-foreground hover:text-accent hover:border-accent w-full rounded-none hover:border-3"
            >
                {{ __('Create') }}
            </flux:button>
        </div>
    </form>
</div>
