## get_custom_fields

Gets custom fields for anything

    $fields = get_custom_fields($params);

### Return Values

`Array` with the custom fields or `false`

### Parameters

You can pass parameters as string or as array.

    //Example of paramerers as string
    $fields = get_custom_fields("field_type=price&content_id=".$cont_id);

<table class="table table-striped table-hover"><thead><tr><th>parameter</th><th>optional values</th><th>description</th></tr></thead><tbody><tr><td>id</td><td>`get_custom_fields("id=3");`</td><td>the id of custom field</td></tr><tr><td>content_id</td><td>`get_custom_fields("content_id=7");`</td><td>id of page or post</td></tr><tr><td>return_full</td><td>`get_custom_fields("content_id=7&return_full=true");`</td><td>if set it will return full array insead of values</td></tr></tbody></table>

 