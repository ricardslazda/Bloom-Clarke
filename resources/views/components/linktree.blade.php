<div class="linktree">
    <section class="linktree__image" style="background: url('{{getenv('APP_URL').getenv('APP_ROOT').'/images/backgrounds/'.$url}} ')center center; background-size: cover;">
    </section>
    <div class="linktree__overlay"></div>
    <div class="linktree-box">
        <div class="container linktree__container">
            <a href="{{getenv('APP_ROOT')}}" class="linktree__icon-box"> <i class="fas fa-home linktree__icon linktree__icon linktree__icon-home"></i></a>
            <i class="fas fa-chevron-right linktree__icon"></i>
            @foreach($links as $link)
                <?php
                $path .= '/' .$link ?>
            <a href="{{getenv('APP_ROOT').$path}}" class="linktree__link">{{$link}}</a>
                <i class="fas fa-chevron-right linktree__icon linktree__arrow" style="margin: 0 10px"></i>
                @endforeach
        </div>
    </div>
</div>