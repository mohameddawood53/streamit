<template>
    <div>
        <div>
            <a class="text-primary"  style="cursor: pointer" @click="toggleBundle" v-if="!bundle">{{ changing }}</a>

                <div class="form-group text-center" v-if="bundle">
                    <label for="exampleFormControlSelect1" :class="floating">{{membership}}</label>
                    <select class="form-control" id="exampleFormControlSelect1" style="font-family: Cairo; background-color : #191919" name="package">
                        <option selected="" disabled="" value="0">{{select_membership}}</option>
                        <option value="1">{{yearly_bundle}}</option>
                        <option value="2">{{three_month_bundle}}</option>
                        <option value="3">{{monthly_bundle}}</option>
                    </select>
                    <button class="btn btn-hover mt-3">{{changing}}</button>
                    <a class="btn btn-link mt-3 float-left" style="cursor: pointer" @click="bundle = !bundle">{{cancal}}</a>
                </div>


        </div>



    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data()
    {
        return {
            bundle : false
        }
    },
    methods: {
        toggleBundle: function ()
        {
            this.bundle = !this.bundle
            // console.log(this.password)
        }
    },
    props:{
        changing : String,
        floating : String,
        membership : String,
        yearly_bundle : String,
        three_month_bundle : String,
        monthly_bundle : String,
        select_membership : String,
        cancal : String,


    }
}
</script>
