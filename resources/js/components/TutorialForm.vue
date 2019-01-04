<template>
    <form class="wizard-form wizard clearfix vertical" id="verticle-wizard" action="#" role="application">

        <div class="steps clearfix">
            <ul role="tablist">
                <li v-for="(fieldset, i) in fieldsets" role="tab" :class="{ first: i === 0, current: fieldset.selected, done: fieldset.done}" aria-disabled="false" :aria-selected="fieldset.selected">
                    <a :id="'verticle-wizard-t-'+i" @click="selected = i">
                        <span v-if="fieldset.selected" class="current-info audible">current step: </span>
                        <span class="number">{{(i + 1)}}.</span> {{fieldset.name}} </a>
                </li>
            </ul>
        </div>

        <div v-for="(fieldset, i) in fieldsets" v-show="fieldset.selected" class="content clearfix">
            <h3 :id="'verticle-wizard-h-'+i" class="title current"> {{fieldset.name}} </h3>

            <fieldset v-if="fieldset.quill" :id="'verticle-wizard-p-'+i" role="tabpanel" :aria-labelledby="'verticle-wizard-h-'+i" class="body current" aria-hidden="fieldset.selected">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label :for="fieldset.id" class="block">{{fieldset.name}}</label>
                    </div>

                    <!--Quill Rich text editor-->
                    <div class="col-sm-12" style="height: 88%">
                        <div :id="fieldset.id + '-editor'">
                            {{fieldset.content}}
                        </div>
                    </div>

                    <div class="col-sm-12 d-none">
                        <textarea :name="fieldset.id" :id="fieldset.id" class="form-control" v-model="fieldset.content"></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset v-else :id="'verticle-wizard-p-'+i" role="tabpanel" :aria-labelledby="'verticle-wizard-h-'+i" class="body current" aria-hidden="false">
                <div v-for="field in fieldset.fields" class="form-group row">
                    <div class="col-sm-12">
                        <label for="topic" class="block">{{field.name}}</label>
                    </div>

                    <div class="col-sm-12">
                        <input :id="field.id" :maxlength="field.maxlength" :name="field.id" :type="field.text" :class="field.class" :placeholder="field.placeholder">
                    </div>

                </div>
            </fieldset>
        </div>
        <div class="actions clearfix">
            <ul role="menu" aria-label="Pagination">
                <li :class="{ disabled : selected === 0 }"><a role="menuitem" @click="previous">Previous</a></li>
                <li :class="{ disabled : selected === fieldsets.length }">
                    <a v-show="!endOfSlides" role="menuitem" @click="next">Next</a>
                    <a v-show="endOfSlides" role="menuitem" @click="finish" >Finish</a>
                </li>
            </ul>
        </div>
    </form>

</template>

<script>
    import editor from './Quill.vue';

    export default {
        name: "tutorialform",
        components: {editor},
        data() {
            return {
                selected: 0,
                toolbars: {
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
                },
                fieldsets: [
                    {
                        name: 'Basic Information',
                        selected: true,
                        done: false,
                        quill: false,
                        fields: [
                            {
                                name: 'Topic',
                                type: 'text',
                                id: 'topic',
                                maxlength: 20,
                                class: 'form-control threshold-1',
                                placeholder: 'This will be displayed in the navigation so make it snappy!'
                            },
                            {
                                name: 'Subtitle',
                                type: 'text',
                                id: 'subtitle',
                                maxlength: 25,
                                class: 'form-control threshold-1',
                                placeholder: 'A short taster of what\'s to come...'
                            }
                        ]
                    },
                    {
                        name: 'Overview',
                        selected: false,
                        done: true,
                        quill: true,
                        id: 'overview',
                        toolbar: 'min',
                        content: '<p>Dragée pastry pudding chocolate bar. Wafer marzipan cupcake caramels gingerbread apple pie caramels. Apple pie ice cream brownie.</p>'
                    },
                    {
                        name: 'Example',
                        selected: false,
                        done: true,
                        quill: true,
                        id: 'example',
                        toolbar: 'comp',
                        content: '<p>Dragée pastry pudding chocolate bar. Wafer marzipan cupcake caramels gingerbread apple pie caramels. Apple pie ice cream brownie.</p>'
                    }
                ]
            }
        },
        computed: {
            endOfSlides : function () {
                const numFieldsets = this.fieldsets.length;
                return this.selected === numFieldsets - 1
            }
        },
        mounted: function () {
            Quill.import('modules/imageResize', ImageResize);
            // Get each fieldset and create quill editor if quill is true
            this.fieldsets.forEach( item => {
                const fieldset = item;
                if (fieldset.quill) {
                    const quill = this.getQuill(fieldset.id, {
                        modules: {
                            toolbar: this.toolbars[fieldset.toolbar],
                            imageResize: {}
                        },
                        theme: 'snow'
                    }, fieldset.content)
                    quill.on('text-change', () => {
                        fieldset.content = quill.container.firstChild.innerHTML;
                        console.log('testing')
                    })
                }
            })
        },
        methods: {
            next: function () {
                const currentfieldset = this.fieldsets[this.selected];
                const nextfieldset = this.fieldsets[this.selected + 1];

                currentfieldset.selected = false; // deselect current fieldset
                currentfieldset.done = true; // current fieldset is now done
                nextfieldset.selected = true; // next fieldset is now selected
                nextfieldset.done = false; // next fieldset is not done

                this.selected = this.selected + 1;
            },
            previous: function () {
                const currentfieldset = this.fieldsets[this.selected];
                const previousfieldset = this.fieldsets[this.selected -1];

                currentfieldset.selected = false; // deselect current fieldset
                currentfieldset.done = true; // current fieldset is now done
                previousfieldset.selected = true; // previous fieldset is now selected
                previousfieldset.done = false; // previous fieldset is not done

                this.selected = this.selected - 1;
            },
            finish: function () {

            },
            getQuill: function (id, options, content) {
                const quill = new Quill(`#${id}-editor`, options);
                quill.clipboard.dangerouslyPasteHTML(content, 'api');
                return quill;
            }
        }
    }
</script>

<style scoped>

</style>
