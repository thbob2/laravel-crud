

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif

                @if (session()->has('trashed'))
                    <div class="alert alert-danger">
                        {{session()->get('trashed')}}
                    </div>
                @endif

                @if (session()->has('EmptyC'))
                    <div class="alert alert-info">
                        {{session()->get('EmptyC')}}
                    </div>
                @endif

                @if (session()->has('restored'))
                <div class="alert alert-warning">
                    {{session()->get('restored')}}
                </div>
                @endif
