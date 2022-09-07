<template>
  <Component 
      :is="is"
      :href="href"
      class="block px-4 py-2 w-full text-sm leading-5 text-gray-700 text-left outline-none hover:bg-gray-100 focus:bg-gray-100 focus:text-gray-900 cursor-pointer"
      @click.stop.prevent="onClick"
      >
      
    <slot/>
  </Component>
</template>

<script>

export default {
    name: "DropdownItem",

    inject: ['dropdown'],

    props: {
        href: {
            type:String,
            default: function() {
              return undefined
            }
        },
        to: {
          type:[String, Object],
          default: function() {
            return undefined
          }
        }
    },
    data: function() {
      return {
        //is: 'a'
      }
    },
    computed: {
      is: function() {

        if(typeof this.to != 'undefined') {
          return 'RouterLink'; // Se href for declarado
        }


        if(typeof this.href != 'undefined') {
          return 'a'; // Se href for declarado
        }

        return 'button';
      }
    },
    methods: {
      onClick: function(evt) {
        this.$emit('click', evt) // passando o evento
        this.closeDropdown()
      },

      closeDropdown: function() {
        //this.dropdown.isOpen = false
        this.dropdown.close()
      }
    }
    
}
</script>

<style>

</style>