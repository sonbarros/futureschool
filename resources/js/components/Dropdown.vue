<template>
  <div class="relative inline-block text-left">
    <button 
        type="button"
        class="flex items-center leading-5 transition"
        :class="roundedFullClass"
        @click.stop.prevent="toggle()"
        >
        <span></span>{{text}}
      <svg v-if="!noIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
      </svg>
    </button>
    <Transition
            enter-active-class="transition ease-out duration-100"
            enter-class="transform opacity-0 scale-95"
            enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95"
        >
        <div
            v-show="isOpen" 
            class="origin-top-right absolute right-0 mt-2 w-56 z-30">
          <div class="py-1 rounded-md bg-white shadow-xs">
            <slot/>
          </div>
        </div>
    </Transition>
  </div>
</template>

<script>
export default {
  props: {
    text: {
      type: String,
      default: 'Dropdown'
    },
    roundedFull: {
      type: Boolean,
      default: false
    },
    noIcon: {
      type: Boolean,
      default: false
    },
  },

  provide: function() {
    return {
      dropdown: this,
      //isOpen: this.isOpen ::poderia passar apenas o isOpen
    }
  },

  data(){
    return {
      isOpen: false
    }
  },
  methods: {
    toggle() {
      this.isOpen = !this.isOpen
    },

    close: function() {
      this.isOpen = false;
    },

    clickOutListener: function(evt) {
      if (!this.$el.contains(evt.target)) {
        this.close(); // fecha o dropdown se o target clicado for diferente do proprio, o proprio eu digo é o Dropdown
      }
    },

    rootCloseListener(vm) {
      if (vm !== this) {
        this.close()
      }
    }
  },

  watch: {
    isOpen: function(value){
      if(value) {
        this.$root.$emit('dropdown::open', this)
      }
    },
  },
  computed: {
    roundedFullClass: function() {
      if(this.roundedFull) {
        return {'rounded-full': true, 'h-8': true, 'w-8': true, 'justify-center': true, 'bg-yellow-500': true, 
          'text-gray-50': true, 'text-sm': true, 'leading-none': true, 'overflow-hidden': true, 'border-0': true
        }
      }
    }
  },
  created: function() {
    this.$root.$on('dropdown::open', this.rootCloseListener)
  },

  mounted: function() {
    document.addEventListener('click', this.clickOutListener)
  },

  beforeDestroy: function() {
    document.removeEventListener('click', this.clickOutListener)
  }
  
}
</script>

<style>

</style>