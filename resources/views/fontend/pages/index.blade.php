@extends('fontend.app')

@section('title', 'Page Title')

@section('content')
<section class="slides">
	<div class="slides-top owl-carousel owl-theme">
		<div class="item-slides has-overlay">
			<img src="https://vncpost.com/images/home-banner-1.png">
			<div class="slider-content">
				<div class="container">
					<h2> Giải pháp vận chuyển thông minh <br> Nhanh chóng, an toàn, tiết kiệm </h2>
					<p> Tối ưu chi phí, nâng cao hiệu suất với dịch vụ giao hàng nhanh tại VNCPOST.</p>
					<a class="btn primary-btn"> Xem thêm <i class="fa fa-angle-right"></i> </a>
				</div>
			</div>
		</div>
		<div class="item-slides has-overlay">
			<img src="https://vncpost.com/images/home-banner-1.png">
			<div class="slider-content">
				<div class="container">
					<h2> Giải pháp vận chuyển thông minh <br> Nhanh chóng, an toàn, tiết kiệm </h2>
					<p> Tối ưu chi phí, nâng cao hiệu suất với dịch vụ giao hàng nhanh tại VNCPOST. </p>
					<a class="btn primary-btn"> Xem thêm <i class="fa fa-angle-right"></i> </a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<div class="container">
	<section class="about">
		<div class="row">
			<div class="col-sm-6">
				<div class="company-details">
					<h2 class="company-title color-title"> VỀ CHÚNG TÔI </h2>
					<h4 class="company-subtitle subtitle"> Là đơn vị giao hàng Home Shopping và thương mại điện tử chuyên nghiệp </h4>
					<p> Được thành lập từ năm 2013, đến nay VNCPOST là đơn vị vận chuyển hàng đầu về thương mại điện tử 
						và vận chuyển hàng Home Shopping. Chúng tôi đã và đang phục vụ hơn 2000 khách hàng trong và ngoài nước trong đó
					có các đơn vị đến từ Hàn Quốc như: VGS Shopping, Lotte, VTV Huyndai, SCJ,... hay các khách hàng TMĐT lớn như: LAZADA, ADAYROI,...</p>
					<a href="/gioi-thieu" class="btn btn-primary view_more_company" role="button"> Tìm hiểu thêm </a>
				</div>
			</div>
			<div class="col-sm-6">
				<img src="https://vncpost.com/images/company-image1.jpg" class="img-responsive">
			</div>
		</div>
	</section>
	<div class="dotted_bottom"></div>
	<section class="services">
		<h2 class="widget_title_services text-center">DỊCH VỤ</h2>
		<h4 class="subtitle-services-other subtitle-2">
			Chúng tôi cung cấp dịch vụ đa dạng phù hợp với nhiều nhu cầu khác nhau
		</h4>
		<div class="row services-other">
			<div class="col-sm-4">
				<div class="img-box">
					<img class="img-responsive" src="https://vncpost.com/images/service-icon2.png" alt="GIAO HÀNG TOÀN QUỐC">
				</div>
				<div class="services-info">
					<h4 class="services-title-one subtitle">GIAO HÀNG NHANH</h4>
					<p>Chúng tôi cung cấp dịch vụ giao hàng nhanh trên toàn quốc với độ an toàn cao,
					thời gian giao hàng chỉ từ 1 đến 3 ngày</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="img-box">
					<img class="img-responsive" src="https://vncpost.com/images/service-icon1.png" alt="GIAO HÀNG THU TIỀN (COD)">
				</div>
				<div class="services-info">
					<h4 class="services-title-one subtitle">GIAO HÀNG THU TIỀN (COD)</h4>
					<p>Chúng tôi sẽ đến lấy hàng tận nơi, giao hàng tận tay người nhận và thu tiền, sau đó chuyển trả tiền thu được cho bạn</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="img-box">
					<img class="img-responsive" src="https://vncpost.com/images/service-icon3.png" alt="GIAO HÀNG TIẾT KIỆM">
				</div>
				<div class="services-info">
					<h4 class="services-title-one subtitle">GIAO HÀNG TIẾT KIỆM</h4>
					<p>Chúng tôi cung cấp dịch vụ giao hàng tiết kiệm, giúp bạn tiết kiệm chi phí tối đa.</p>
				</div>
			</div>
			<div class="clearfix spacer-20"></div>
			<div class="col-sm-4">
				<div class="img-box">
					<img class="img-responsive" src="https://vncpost.com/images/service-icon4.png" alt="GIAO HÀNG TRONG NGÀY">
				</div>
				<div class="services-info">
					<h4 class="services-title-one subtitle">GIAO HÀNG TRONG NGÀY</h4>
					<p>Đáp ứng nhu cầu giao hàng nội / ngoại thành với yêu cầu giao trong ngày tại Hà Nội và Hồ Chí Minh.</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="img-box">
					<img class="img-responsive" src="https://vncpost.com/images/service-icon5.png" alt="VẬN TẢI BẮC NAM">
				</div>
				<div class="services-info">
					<h4 class="services-title-one subtitle">VẬN TẢI BẮC NAM</h4>
					<p>Chúng tôi cung cấp dịch vụ vận tải đường dài, vận tải Bắc Nam thông minh, an toàn và tiết kiệm</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="img-box">
					<img class="img-responsive" src="https://vncpost.com/images/service-icon6.png" alt="LƯU KHO">
				</div>
				<div class="services-info">
					<h4 class="services-title-one subtitle">LƯU KHO</h4>
					<p>Giúp bạn tiết kiệm chi phí, nhân lực và gia tăng hiệu quả kinh doanh</p>
				</div>
			</div>
		</div>
	</section>
	<div class="dotted_bottom"></div>
	<section class="home-services-other" style="padding-top: 20px;">
		<div class="container">
			<div class="section-title text-center">
				<h2 class="title-services-other title-2">TẠI SAO BẠN NÊN CHỌN CHÚNG TÔI?</h2>
				<div class="spacer-50"> </div>
			</div>

			<div class="row services-other">
				<div class="col-sm-4">
					<div class="img-box">
						<img class="img-responsive" src="https://vncpost.com/images/piggy-bank.png" alt="TIẾT KIỆM CHI PHÍ">
					</div>
					<div class="services-info">
						<h4 class="services-title-one subtitle">TIẾT KIỆM CHI PHÍ</h4>
						<p>
							Bạn sẽ vô cùng ngạc nhiên khi tiết kiệm được chi phí khi sử dụng dịch vụ của VNCPOST.
							Ngoài việc cước vận chuyển hợp lý, chúng tôi luôn duy trì chất lượng tốt nhất, giảm thiểu
							tỉ lệ hủy khi bạn gửi hàng.
						</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="img-box">
						<img class="img-responsive" src="https://vncpost.com/images/savings.png" alt="ĐỐI SOÁT LINH HOẠT">
					</div>
					<div class="services-info">
						<h4 class="services-title-one subtitle">ĐỐI SOÁT LINH HOẠT</h4>
						<p>
							Chúng tôi hỗ trợ chính sách thanh toán linh hoạt, bạn có thể yêu cầu nhận thanh toán định kỳ 2 ngày
							, 4 ngày hoặc 1 tuần 1 lần. Nếu lượng hàng gửi lớn sẽ rất phù hợp với dịch vụ đối soát hằng ngày của VNCPOST
						</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="img-box">
						<img class="img-responsive" src="https://vncpost.com/images/shield.png" alt="ĐẢM BẢO, AN TOÀN">
					</div>
					<div class="services-info">
						<h4 class="services-title-one subtitle">ĐẢM BẢO, AN TOÀN</h4>
						<p>
							Chúng tôi luôn nâng niu, giữ gìn hàng hóa, lưu trữ khoa học, người nhận sẽ vô cùng hài lòng khi nhận được sản phẩm bạn gửi.
							Ngoài ra, thông tin khách hàng luôn được chúng tôi bảo vệ tốt nhất với hệ thống phần mềm chuyên dụng.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="dotted_bottom"></div>
	<section class="home-partners">
		<div class="container">
			<div class="section-title text-center">
				<h2 class="subtitle-testimonials title-2"> KHÁCH HÀNG CỦA CHÚNG TÔI </h2>
				<div class="spacer-20"> </div>
			</div>
			<div class="carousel-partners owl-carousel owl-theme">
				<div class="item-partners">
					<img src="https://vncpost.com/images/partner1.png">
				</div>
				<div class="item-partners">
					<img src="https://vncpost.com/images/partner2.png">
				</div>
				<div class="item-partners">
					<img src="https://vncpost.com/images/partner3.png">
				</div>
				<div class="item-partners">
					<img src="https://vncpost.com/images/partner4.png">
				</div>
				<div class="item-partners">
					<img src="https://vncpost.com/images/partner5.png">
				</div>
				<div class="item-partners">
					<img src="https://vncpost.com/images/partner6.png">
				</div>

			</div>
		</div>
	</section>
</div>
@endsection