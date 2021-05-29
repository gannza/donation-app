<template>
<div class="momo">
<b-card title="Donate with Momo Pay" sub-title="Amount should be above of 100 rwf">
    <b-card-text>
      From 100 rwf to 1000000rwf
    </b-card-text>

   <b-card-body>
     <div class="input-group">
        <input id="btn-input" type="text" name="phone_number" class="form-control input-sm" placeholder="Type phone number" v-model="phone_number" @keyup.enter="canPayWithMomo">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="canPayWithMomo">
                Pay
            </button>
        </span>
    </div> <br>
     <p class="alert alert-danger" v-if="errors.length">
    <b>Please correct the following error(s):</b>
    <ul>
      <li v-for="error in errors">{{ error }}</li>
    </ul>
  </p>
   <p class="alert alert-danger" v-if="apierrors && apierrors.length">
    <b>Please correct the following error(s):</b>
    <ul>
      <li v-for="apierrors in errors">{{ error }}</li>
    </ul>
  </p>
  
    </b-card-body>


  </b-card>

    <b-modal id="iFrame" size="xl" title="Proceed" hide-footer>

    <p class="my-4" v-if="apiresponse">
 
    <b-embed
    type="iframe"
    aspect="16by9"
    :src="apiresponse.redirectUrl"
    allowfullscreen
  ></b-embed>
    </p>
  </b-modal>
</div>
   
</template>

<script>
    export default {
         props: ['apierrors','apiresponse'],
        data() {
            return {
                phone_number: '',
                errors:[]
            }
        },
        methods: {
            canPayWithMomo() {
                this.errors=[];
                 if (!this.phone_number) {
                     this.errors.push('Phone number required.');
                     return;
                    }
                this.$loading(true);
                this.$emit('canpaywithmomo', {
                    phone_number: this.phone_number
                });
                this.phone_number = ''
            }
        }    
    }
</script>