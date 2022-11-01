@if($gallery_view == 'justified-with')
<div class="isotope-wrap">
    <div class="isotope col-4 gutter-3">
    	<div class="isotope-top-content gallery-share-on">
    	</div>
	
	    <div class ="gallery-full-width">
            <div id="gallery" class="isotope-items-wrap lightgallery gsi-color post-container" style="position: relative;">
            	<!-- Grid sizer (do not remove!!!) -->
            	<div class="grid-sizer"></div>
            
            	@foreach($products as $product)

                <div class="isotope-item" style="margin: 10px;">
            		<div class="row">
                		<div class="col-md-12">
                			<div class="profile-container" style="display: table-cell; vertical-align: middle;">
								<a href="/{{$product->tagname}}" class="main-page-user-click detailed-user-tag-name-link" data-type="user" data-user-id="{{$product->user_id}}">
                				<img src="{{ $product->shop_image_url }}" alt="img">
								</a>
                			</div>
                			<div style="display: table-cell; vertical-align: middle;">
                				<div style="font-size: 20px; letter-spacing: 2px;">
									<a href="/{{$product->tagname}}" class="main-page-user-click detailed-user-name-link ibm-regular-400-family" data-type="user" data-user-id="{{$product->user_id}}">{{ $product->company_name }}</a>
                				</div>
                				<div style="font-size: 12px; margin-top: -8px;">
									<a href="/{{$product->tagname}}" class="main-page-user-click detailed-user-tag-name-link" data-type="user" data-user-id="{{$product->user_id}}">{{ '@'.$product->tagname }}</a>
                				</div>
                			</div>
                		</div>
            		</div>
            		<a href="{{ url('/') }}/product_details/{{ $product->id }}">
                		<div class="gallery-single-item isotope-product_image text-center">
                    		<img src="{{ asset('images/post/new_images/thumb') }}/{{ $product->thumb }}" class="gs-item-image w-100" alt="">
                    		@if(isset($product->comment))
                    		<div class="isotope-product-labels isotope-product-comment">{{ $product->comment }}</div>
                    		@endif
                    		<div class="isotope-product-labels isotope-product-price">{{ $product->price }} EUR</div>
                		</div>
            		</a>
            		<!--<div class="row">-->
            		<!--	<div class="col-xs-6">-->
            		<!--		<div class="like-container">-->
            		<!--			<img src="{{ asset('assets/img/icon-like-1024.png') }}" alt="img"><span class="like"></span>-->
            		<!--		</div>-->
            		<!--	</div>-->
            		<!--	<div class="col-xs-6">-->
            		<!--		<div class="pull-right comment-container">-->
            		<!--			<img src="{{ asset('assets/img/icon-comment-1024.png') }}" alt="img"><span class="comment"></span>-->
            		<!--		</div>-->
            		<!--	</div>	-->
            		<!--</div>-->
            		<div class="text-center">
                		<h2 class="m-0 prozak-light-family" style="font-weight:normal; font-size:23px; letter-spacing:2px; line-height:.8; padding-top:10px;">{{ $product->name }}</h2>
                		<h4 class="m-0 ibm-light-family" style="font-weight:300; font-size:14px; padding-bottom: 3px;">{{ $product->type }}</h4>
            		</div>
            	</div>
            		
            	@endforeach
            	 
            </div>
        </div>
    </div>
</div>
@elseif($gallery_view == 'square')
<div class="isotope-wrap">
    <div class="isotope col-4 gutter-3">
    	<div class="isotope-top-content gallery-share-on">
    	</div>
	
	    <div class ="gallery-full-width">
            <div id="gallery" class="isotope-items-wrap lightgallery gsi-color post-container" style="position: relative;">
            	<!-- Grid sizer (do not remove!!!) -->
            	<div class="grid-sizer"></div>

                	@foreach($products as $product)

                    <div class="isotope-item gallery-single-item-square" style="margin: 10px; background-image:url({{ asset('images/post/new_images/thumb') }}/{{ $product->thumb }})/* height:300px; overflow:hidden;*/">
                		<a href="{{ url('/') }}/product_details/{{ $product->id }}">
                    		<div class="gallery-single-item isotope-product_image text-center squared-clickable-item" >
                        		<!--<img src="{{ asset('images/post/new_images/thumb') }}/{{ $product->thumb }}" style="min-height:300px;" class="gs-item-image w-100" alt="">-->
                    		</div>
                		</a>
                	</div>

                	@endforeach
	 
            </div>
        </div>
    </div>
</div>
@else
<div class="isotope-wrap">
    <div class="isotope col-4 gutter-3">
    	<div class="isotope-top-content gallery-share-on">
    	</div>
	
	    <div class ="gallery-full-width">
            <div id="gallery" class="isotope-items-wrap lightgallery gsi-color post-container" style="position: relative;">
            	<!-- Grid sizer (do not remove!!!) -->
            	<div class="grid-sizer"></div>
            
            	@foreach($products as $product)
            	
                <div class="isotope-item" style="margin: 10px; overflow:hidden;">
            		<a href="{{ url('/') }}/product_details/{{ $product->id }}">
                		<div class="gallery-single-item isotope-product_image text-center">
                    		<img src="{{ asset('images/post/new_images/thumb') }}/{{ $product->thumb }}" class="gs-item-image w-100" alt="">
                		</div>
            		</a>
            	</div>
            		
            	@endforeach
            	 
            </div>
        </div>
    </div>
</div>
@endif