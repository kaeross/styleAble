<template>
    <div class="col-sm-12">
        <div class="editor" :id="id + '-editor'" :config="editorOptions">
            <slot></slot>
        </div>
        <textarea :name="id" :id="id" class="form-control">{{content}}</textarea>
    </div>
</template>

<script>
    export default {
        name: "editor",
        props: {
            id: {
                type: String,
                required: true
            },
            "editor-style": {
                type: String,
                required: true
            }
        },
        data() {
            return {
                content: '',
                toolbar: {
                    min : [
                        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                        ['blockquote', 'code-block', 'link'],
                        [{'list': 'ordered'}, {'list': 'bullet'}],
                        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
                        [{'align': []}]
                    ],
                    comp : [
                        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                        ['blockquote', 'code-block', 'link', 'image'],

                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],

                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                        [{ 'align': [] }]
                    ]
                }
            }
        },
        computed: {
            editorOptions: function() {
                return {
                    modules: {
                        toolbar: this.toolbar[this.editorStyle],
                        imageResize: {}
                    },
                    theme: 'snow'
                }
            },
            syncContent: function() {
                return this.content = this.getEditorContent();
            }
        },
        mounted: function () {
            Quill.import('modules/imageResize', ImageResize);
            return new Quill(`#${this.id}-editor`, this.editorOptions)
        },
        methods: {
            getEditorContent() {
                // get the html content of the editor
                return document.getElementById(`${id} + '-editor'`).firstChild.innerHTML;
            }
        }
    }
</script>

