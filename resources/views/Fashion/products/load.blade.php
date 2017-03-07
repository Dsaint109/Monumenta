<div class="w3ls_dresses_grid_right_grid2">
    <div class="w3ls_dresses_grid_right_grid2_left">
        <h3>Showing Results: {{ $products->firstItem() }} - {{ $products->lastItem() }}</h3>
    </div>
    <div class="w3ls_dresses_grid_right_grid2_right">
        <select name="select_item" class="select_item">
            <option selected="selected">Default sorting</option>
            <option>Sort by popularity</option>
            <option>Sort by average rating</option>
            <option>Sort by newness</option>
            <option>Sort by price: low to high</option>
            <option>Sort by price: high to low</option>
        </select>
    </div>
    <div class="clearfix"> </div>
</div>


<div id="load" style="position: relative" class="w3ls_dresses_grid_right_grid3">

    @foreach($products as $product)
        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">

            <div class="agile_ecommerce_tab_left dresses_grid">
                <div class="hs-wrapper hs-wrapper2">
                    @foreach($product->optionValues as $prov)
                        @if($prov->pictures)
                            @foreach($prov->pictures->take(10) as $pic)
                    <img src="{{ $pic->image_url }}" alt="{{ $product->name }}" class="img-responsive" />
                            @endforeach
                        @endif
                    @endforeach
                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal{{ $product->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h5><a href="/{{ $product->slug }}">{{ $product->name }}</a></h5>
                <div class="simpleCart_shelfItem">
                    <p><img src="/images/naira.svg" alt="Naira" height="15px"><span>{{ $product->notPrice }}</span> <i class="item_price"><img src="/images/naira.svg" alt="Naira" height="15px">{{ $product->price }}</i></p>
                    <p><a class="delete_pr" href="#"><i class="fa fa-trash-o"></i></a> <a class="edit_pr" href="/My-Products/{{ $product->id }}"><i class="fa fa-pencil"></i></a></p>

                </div>

                <div class="dresses_grid_pos">
                    <h6>{{ $product->stock }}</h6>
                </div>
            </div>

        </div>
    @endforeach

</div>
{{ $products->links() }}
