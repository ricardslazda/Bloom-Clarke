<div class="listings__object">
    <div class="listings__image-box">
        <a href="{{getenv('APP_ROOT').'/listings/'.$propertyType["type"].'/'.$property['id']}}"><img class="listings__image" src="{{getenv('APP_URL').getenv('APP_ROOT').'/images/properties/'.$property['image_path'].'.jpg'}}" alt="Listing"></a>
    </div>
    <div class="listings__content">
        <div class="listings__details">
            <h5 style="margin: 0;" class="listings__title">
                <a href="{{getenv('APP_ROOT').'/listings/'.$propertyType["type"].'/'.$property['id']}}" class="listings__name">{{$property['name']}}</a>
            </h5>
            <span class="listings__address">{{$property['address']}}</span>
        </div>
        <h5 style="margin: 0;">
            <div class="listings__price">${{number_format($property['price'], '0', '', "'")}}</div>
        </h5>
        <p class="listings__info">{{$property['description']}}</p>
    </div>
</div>