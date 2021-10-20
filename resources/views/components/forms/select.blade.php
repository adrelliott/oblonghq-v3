@props(['id', 'disabled' => false, 'model', 'options' => '', 'choice'])
<div>
	<select id="{{ $id }}"
		{{ $model ? 'wire:model.lazy=' . $model : '' }}
		{{ $disabled ? 'disabled' : '' }}
		class="form-select block min-w-max mt-1 border-gray-300 rounded-md"
	>
		@forelse($options as $key => $value)
			<option value="{{ $key }}">
				{{ $value }}
			</option>
		@empty
			<option disabled>No options available</option>
		@endforelse
	</select>
</div>
