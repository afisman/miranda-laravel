<x-app-layout>
@section('content')
    <section class="RoomsBanner">
            <div class="section">
                <div class="RoomsBanner__text">
                    <p>THE ULTIMATE LUXURY</p>
                    <h2>Orders</h2>
                </div>
                <div class="RoomsBanner__links">
                    <a href="{{route('index')}}" class="RoomsHome">
                        Home
                    </a>
                    <a href="#" class="RoomsSelected">
                        Orders
                    </a>
                </div>
            </div>
    </section>
    <section class="OrdersList">
        <div class="form-control form-control--flex">
                <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'create-order')">
                    + New Order
                </x-primary-button>
            </div>
        <table class="orderTable">
            <thead>
                <tr>
                    <th>Room</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->room->room_number}}</td>
                    <td>{{$order->type}}</td>
                    <td>{{$order->description}}</td>
                    <td></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <x-modal name="create-order" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" class="form form--modal --max-width" action="{{ route('orderCreate') }}" class="p-6">
                @csrf
                @method('post')


                <h2 class="order__title">
                    {{ __('Create a new order') }}
                </h2>
                <x-text-input id="user_id" type="hidden" name="user_id" :value="Auth::id()" />

                <div class="form-control">
                    <x-input-label for="room" :value="__('Room')" />
                    <select class="form__select" name="room_id" id="room">
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('room_id')" />
                </div>

                <div class="form-control">
                    <x-input-label for="type" :value="__('Type')" />
                    <select class="form__select" name="type" id="type">
                        @foreach ($types as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('type')" />
                </div>

                <div class="order-form-control">
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea class="form__area" name="description" id="description" cols="30" rows="10"></textarea>
                    <x-input-error :messages="$errors->get('description')" />
                </div>

                <div class="form-control form-control--flex">
                    <x-primary-button class="new__order">
                        {{ __('Create New Order') }}
                    </x-primary-button>
                </div>
            </form>
        </x-modal>
@endsection
</x-app-layout>
