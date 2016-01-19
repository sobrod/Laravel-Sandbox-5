
        
        <!-- FORM PARTIAL -->
        
        <!-- TITLE -->
        <div class="form-group">
            <label for="name">Title:</label>
            <input class="form-control" type="text" name="title" id="title" default="null"
            value="{{ (is_null(old('title')) and isset($article)) ? $article->title : old('title') }}">
        </div>
        
        <!-- BODY -->
        <div class="form-group">
            <label for="body">Body:</label>
            <input class="form-control" type="textarea" name="body" id="body" default="null"
            value="{{ (is_null(old('body')) and isset($article)) ? $article->body : old('body') }}">
        </div>
        
        <!-- PUBLISHED AT -->
        <div class="form-group">
            <label for="published_at">Publish On:</label>
            <input class="form-control" type="date" value="{{ date('Y-m-d') }}" name="published_at" id="published_at"
            value="{{ (is_null(old('published_at')) and isset($article)) ? $article->published_at : old('published_at') }}">
        </div>
            
        <!-- END FORM PARTIAL -->