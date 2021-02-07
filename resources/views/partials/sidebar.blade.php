
<div class="col-md-4 col-xl-3">
    <div class="sidebar px-4 py-md-0">

        <h6 class="sidebar-title">Search</h6>
        <form class="input-group" action="" method="GET">
        <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
            <div class="input-group-addon">
                <span class="input-group-text"><i class="ti-search"></i></span>
            </div>
        </form>

        <hr>

        <h6 class="sidebar-title">Categories</h6>
        <div class="row link-color-default fs-14 lh-24">
            @foreach ($categories as $category)
        <div class="col-6"><a href="{{route('blog.category',$category->id)}}">{{$category->name}}</a></div>
            @endforeach
        </div>

        <hr>
        <!--Posts-->
        <h6 class="sidebar-title">Top posts</h6>


            @foreach ($posts as $post)

            <a class="media text-default align-items-center mb-5" href="{{ route('blog.show',$post->id) }}">
                <img class="rounded w-65px mr-4" src="{{url('storage/'.$post->image)}}">
                <p class="media-body small-2 lh-4 mb-0">{{$post->title}}</p>
            </a>

            @endforeach

        <hr>
        <!-- Tags-->
        <h6 class="sidebar-title">Tags</h6>

        <div class="gap-multiline-items-1">
            @foreach ($tags as $tag)
        <a class="badge badge-secondary" href="{{route('blog.tag',$tag->id)}}">{{$tag->name}}</a>
            @endforeach


        </div>

        <hr>

        <h6 class="sidebar-title">About</h6>
        <p class="small-3">This is Dealer's CMS in memory of the PIPELINE IT Solution Corporate
        </p>


    </div>
</div>
