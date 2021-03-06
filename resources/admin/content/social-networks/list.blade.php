@extends('Admin::index')

@section('content')
    @include('Admin::alerts')
    <div>
        <a href='{{ route('admin.social-networks.add') }}' class="btn-sm btn-primary pull-right">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
            Добавить
        </a>
        <h1 class="sub-header">Ссылки соц. сетей</h1>
    </div>

    @if (count($items))
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Иконка</th>
                    <th>Дата</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr class="item-{{ $item->id }}">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <i class="{{ $item->icon }}"></i>
                        </td>
                        <td>{{ $item->created_at->format('d.m.Y H:i:s') }}</td>
                        <td>
                            <a href='{{ route('admin.social-networks.get', ['id' => $item->id]) }}'><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="{{ route('admin.social-networks.delete', ['id' => $item->id]) }}" onclick="return confirm('Удалить эту запись?')" style="cursor: pointer;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pull-right">
                {{ $items->render() }}
            </div>
        </div>
    @else
        <div>Нет ссылок</div>
    @endif
@endsection

@push('footer-scripts')
@endpush
