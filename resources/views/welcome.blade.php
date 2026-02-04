
@extends('layouts.main')



@section('main_content')

			<div class="guest-content" data-panel="guest_view">
				<h1>Inflation Indexes</h1>
				<p>Please Sign In to customize your dashboard.</p>
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis sunt quod atque, qui rem est neque voluptate delectus! Et placeat nesciunt architecto labore minus cupiditate soluta eos deleniti facere eaque!tetur? Nulla dolore, earum ipsam odio iure explicabo culpa voluptatum fuga!
					tempora placeat voluptatibus rerum atque?</p>
			</div>

            {{-- @php

@endphp --}}
            @push('page_styles')
                <link rel="stylesheet" href="{{ asset('css/special.css') }}">
            @endpush

            <div class="special-card">Я золотая карточка, и мои стили прилетели через stack!</div>

			<p>
				<span>Таблица инфляций: </span>
						  <span></span>



                    @if(isset($name))
                        {{-- Этот блок сработает только если мы пришли из метода debug --}}
                        @if($name === 'admin')
                            <b>Админ детектед!</b>
                        @else
                            Привет, {{ $name }}
                        @endif
                    @endif




					{{-- <ul>

                        <li>{{$result}}</li>
						@foreach ($result as $item)
							<li>{{ $item }}</li>
						@endforeach
					</ul> --}}

                </p>

                {{-- ВЫЖНО!!!! Проверка всего блейдшаблона что в нем есть --}}
                {{-- @dd(get_defined_vars()) --}}

            {{-- @forelse($countries as $country)
    <li>{{ $country }}</li>
@empty
    <li>Список стран пока пуст :(</li>
@endforelse --}}


            {{-- @if($rate > 2)
    <p style="color: red;">Высокая инфляция!</p>
@elseif($rate == 1)
    <p>Стабильно</p>
@else
    <p>Все хорошо</p>
@endif --}}
							{{-- // function checkStatus(?float $value): string {
				// 	if($value != null){
				// 	if ($value > 2.0) {
				// 		return "🔥 Высокая";
				// 	}
				// 	return "✅ Низкая";
				// 	} else{
				// 		 return "⚪ Нет данных";
				// 	}
				// }
				// $numbers = [1, 2, 3];

				// $arrKeys = array_keys($newCountries);
				// //Обычная анонимная функция
				// 	$result = array_map(function($name) {
				// 	// Мы берем имя и просто добавляем к нему текст
				// 	return "СТРАНА: " . strtoupper($name);
				// 	}, $arrKeys);

				// $onlyRates = array_column($newCountries, 'rate');

				// $doubleShort = array_map(fn($n) => $n * 100, $onlyRates);

				// $double = array_map(function($n) {
				// 	return $n * 2;
				// }, $numbers);

				// // Короткая стрелочная функция (доступна с PHP 7.4+)
				 //$doubleShort = array_map(fn($n) => $n * 2, $numbers); --}}

							{{-- @foreach ($newCountries as $country => $sbj)
					<li>
						{{checkStatus($sbj['rate']?? null)}}

					</li>

				@endforeach --}}
			{{-- <p>масив:  {{ $newCountries["Ukraine"] }} а также {{ $newCountries["Japan"]  ?? "Данные не найдены" }} </p> --}}

						{{-- @if ($value > 2.0)
							<strong>(Внимание: Высокая!)</strong>
						@elseif ($value == 2.0)
							<strong>(инфляция: нормальная!)</strong>
						@else
							<strong>(инфляция: Низкая!)</strong>
						@endif --}}

					{{-- <span>Iт country: {{ $country }} </span>

					@foreach($sbj as $data => $value)
						<span> indicator {{$data}} is {{$value}} </span>
					@endforeach --}}


{{--
			<p>Текущий индекс {{ $indexName }} составляет {{ $inflationRate }}%</p>
			<p>В стране {{ $countryName }} зафиксирован показатель {{ $currentRate }}</p> --}}




{{--
			<div class="user_window is-none" data-panel="user_window">
				<h2>Welcome, <span class="user_name">Vasia</span> !</h2>
				<div class="personal_data">
					<h3>Your Dashboard Settings</h3>
					<hr>
					<form action="" method="post">
						<ul>
							<li>
								<span>E-mail: 213213@gmail.com</span>
								<input type="text" placeholder="Custom Label">
								<input type="checkbox" id="notify">
							</li>
						</ul>
						<button type="submit" class="btn">Save changes</button>
					</form>
				</div>
			</div>

			<div class="admin_window is-none" data-panel="admin_window">
				<h2>Admin Control Panel</h2>
				<p>System status: OK</p>
			</div> --}}


@endsection

