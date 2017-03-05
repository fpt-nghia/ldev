@extends('user.layout.main')

@section('content')
	<section class="main-content">
		<div class="row">
			<div class="span12">
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">商品検索</a>
						</div>
						<div id="collapseOne" class="accordion-body in collapse">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="span6">
										<h4>絞り込み検索</h4>
										<p>価格</p>
										<form action="#" method="post">
											<fieldset>
												<label class="radio" for="register">
													<input type="radio" name="account" value="register" id="register" checked="checked">10万円～20万円未満
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">20万円～30万円未満
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">30万円～40万円未満
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">40万円～
												</label>
												
										<p>デザイン</p>
										<form action="#" method="post">		
												<fieldset>
												<label class="radio" for="register">
													<input type="radio" name="account" value="register" id="register" checked="checked">４℃アクアニティ（ウェーブライン）
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">ストレートライン
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">V字ライン
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">ディズニー
												</label>
												
										<p>ダイヤモンド</p>
										<form action="#" method="post">		
												<fieldset>
												<label class="radio" for="register">
													<input type="radio" name="account" value="register" id="register" checked="checked">ソリティア（一石）
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">サイドメレダイヤモンド
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">パヴェダイヤモンド	
												</label>
												
										<p>素材</p>
										<form action="#" method="post">		
												<fieldset>
												<label class="radio" for="register">
													<input type="radio" name="account" value="register" id="register" checked="checked">プラチナ950
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">４℃ピュアプラチナ（プラチナ995）
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">ゴールド
												</label>
											　　　
												
												
												
												
												<br>
												<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">上記の条件で絞り込む</button>
												<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">条件をリセットする</button>
											</fieldset>
										</form>
									 </div>
									 <div class="span6">
										<h4>来店予約</h4>
										<p>はじめて予約をしてご来店頂いたお客さんへ素敵なプレゼントをご用意しております。</p>
								
										<form action="#" method="post">
											<fieldset>
												<div class="control-group">
													<label class="control-label">WEBから来店予約の流れ</label>
													<label class="control-label">プランを選択</label>
													<form action="#" method="post">
											
											<fieldset>
												<label class="radio" for="register">
													<input type="radio" name="account" value="register" id="register" checked="checked">エンゲージリング（ご婚約指輪）
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">マリッジリング（ご結婚指輪）
												</label>
												<label class="radio" for="guest">
													<input type="radio" name="account" value="guest" id="guest">両方（ご婚約指輪とご結婚指輪）
												</label>
												
													
													
													
													<!--<div class="controls">
														<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
													</div>-->
												</div>
												<div class="control-group">
													<label class="control-label">ご予約日、時間を選択</label>
													
													
													
													<div class="controls">
													<input type="password" placeholder="希望時間入力" id="password" class="input-xlarge">
													</div>
												</div>
												<button class="btn btn-inverse">登録</button>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
						</div>
						<div id="collapseTwo" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="span6">
										<h4>個人的なデータ</h4>
										<div class="control-group">
											<label class="control-label">姓</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">名</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>					  
										<div class="control-group">
											<label class="control-label">Eメール</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">電話番号</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">ファックス</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
									</div>
									<div class="span6">
										<h4>住所</h4>
										<div class="control-group">
											<label class="control-label">会社</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">会社のID:</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>					  
										<div class="control-group">
											<label class="control-label"><span class="required">*</span> 住所 1:</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">住所 2:</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"><span class="required">*</span> 市:</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"><span class="required">*</span> 郵便番号:</label>
											<div class="controls">
												<input type="text" placeholder="" class="input-xlarge">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"><span class="required">*</span> 国籍:</label>
											<div class="controls">
												<select class="input-xlarge">
													<option value="1">Afghanistan</option>
													<option value="2">Albania</option>
													<option value="3">Algeria</option>
													<option value="4">American Samoa</option>
													<option value="5">Andorra</option>
													<option value="6">Angola</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label"><span class="required">*</span> Region / State:</label>
											<div class="controls">
												<select name="zone_id" class="input-xlarge">
													<option value=""> --- Please Select --- </option>
													<option value="3513">Aberdeen</option>
													<option value="3514">Aberdeenshire</option>
													<option value="3515">Anglesey</option>
													<option value="3516">Angus</option>
													<option value="3517">Argyll and Bute</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">お客様の声</a>
						</div>
						<div id="collapseThree" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="control-group">
										<label for="textarea" class="control-label">コメント</label>
										<div class="controls">
											<textarea rows="3" id="textarea" class="span12"></textarea>
										</div>
									</div>									
									<button class="btn btn-inverse pull-right">コメント</button>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>			
@stop