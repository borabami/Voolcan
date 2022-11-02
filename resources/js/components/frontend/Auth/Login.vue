<template>
  <v-app class="bg-blue pa-12">
    <v-container justify="center">
      <v-row align="center">
        <v-card class="mx-auto pa-md-4 mx-lg-auto" width="400">
          <v-card-title
            justify="center"
            class="text-xs-h6 text-md-h5 text-lg-h4 font-weight-black"
          >
            VOOLCAN
          </v-card-title>
          <v-form
            ref="form"
            id="form"
            v-model="form"
            :readonly="loading"
            @submit.prevent="onSubmit"
            lazy-validation
          >
          
            <v-text-field
              v-model="auth.email"
              :readonly="loading"
              :rules="[required]"
              label="E-mail"
              variant="underlined"
              type="email"
              class="mb-2"
              prepend-inner-icon="mdi-email"
              required
            ></v-text-field>


            <v-text-field
              v-model="auth.password"
              :rules="[required]"
              label="Password"
              type="password"
              variant="underlined"
              class="mb-2"
              prepend-inner-icon="mdi-form-textbox-password"
              required
            ></v-text-field>

            <v-btn
              block
              type="submit"
              :disabled="!form"
              color="blue"
            >
              Log In
            </v-btn>
          </v-form>
        </v-card>
      </v-row>
    </v-container>
  </v-app>
</template>


<script>
    export default {
        

        data(){
        return {
            auth:{
                email: null,
                password: null
            },
            
        }
    },

        methods: {
      onSubmit () {

        if (!this.form) return

        this.loading = true

        axios.get('/sanctum/csrf-cookie').then(response => {
            // Login...
            axios.post('/login', this.auth).then(response => {
               this.$router.push('/home');
            }).catch(error => console.log(error)); // credentials didn't match
    });
      },
      required (v) {
        return !!v || 'Field is required'
      },
    },
    }
</script>
