@php
  //dd($elements);
@endphp
<div class="row">
    <div class="col">
    <table class="table bordered border table-bordered align-items-center table-sm">
      <thead class="thead-light">
       <tr>
         <th>#</th>
         <th>Text Field 1</th>                            
         <th>Text Feild 2</th>
         <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($elements as $key => $element)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>
            <input type="text" class='form-control' wire:model.defer="elements.{{ $key }}.val1" />
          </td>
          <td>

            <input type="text" class='form-control' wire:model.defer="elements.{{ $key }}.val2" />
          </td>
           <td><button type="button" class="btn btn-danger btn-small" wire:click="remove({{ $key }})">&times;</button></td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
         <tr>
           <td colspan="4" class="text-right">
              <button type="button" class="btn btn-info" wire:click="add()">+ Add Row</button>
              <button type="button" class="btn btn-info" wire:click="save()">Save</button>
            </td>
        </tr>
      </tfoot>
    </table>
    </div>
</div>
