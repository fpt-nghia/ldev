@extends('user.layout.main')

@section('content')
	<section class="main-content">				
		<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>ログイン</span></h4>
				<strong>メンバー登録されているお客様 こちらからログインしてください:</strong>
				<form action="{{ url('/login') }}" method="post">
				 	{{ csrf_field() }}
					<input type="hidden" name="next" value="/">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Eメール</label>
							<div class="controls">
								<input type="text" name="email" value="{{ old('email') }}" required class="input-xlarge">
							    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">パスワード</label>
							<div class="controls">
								<input type="password" name="password" required class="input-xlarge">
								 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-inverse large" type="submit" value="ログイン">
							<hr>
							<p class="reset">パスワードを忘れた方は</a></p>
						</div>
					</fieldset>
				</form>				
			</div>
			<div class="span7">					
				<h4 class="title"><span class="text"><strong>メンバー登録されていないお客様</span></h4>
				<strong>4°C eショップを初めてご利用のお客様は下記からご登録ください。</strong>
				
				<form class="form-stacked" role="form" method="POST" action="{{ url('/register') }}">
					{{ csrf_field() }}
					<fieldset>
						<div class="control-group">
							<label class="control-label">ユーザー名</label>
							<div class="controls">
								<input type="text" name="name" value="{{ old('name') }}" required autofocus class="input-xlarge">
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Eメール:</label>
							<div class="controls">
								<input type="text" name="email" value="{{ old('email') }}" required class="input-xlarge">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">パスワード:</label>
							<div class="controls">
								<input type="password" name="password" required class="input-xlarge">
								
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>	
						<div class="control-group">
							<label class="control-label">Confirm Password:</label>
							<div class="controls">
								<input type="password" name="password_confirmation" required class="input-xlarge">
							</div>
						</div>							                            
						<div class="control-group">
							<p>4°Cを初めてご購入の方はこちらから</p>
						</div>
						<hr>
						<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="登録"></div>
					</fieldset>
				</form>					
			</div>				
		</div>
	</section>	
@endsection
