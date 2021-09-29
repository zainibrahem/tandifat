module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      float: ['responsive', 'direction'],
      margin: ['responsive', 'direction'],
      padding: ['responsive', 'direction'],
      textAlign: ['responsive', 'direction'],
      left: ['responsive', 'direction'],
      right: ['responsive', 'direction'],
      transform: ['responsive', 'direction'],
      translate: ['responsive', 'direction'],
      flexDirection: ['responsive', 'direction'],
      
    }
  },
  plugins: [
    require('tailwindcss-dir')(),
  ],
  theme:{
    extend:{
      colors:{
        primary : '#BB3A7D',
        secondarys:'#F178B6',
        transparent: 'transparent',
        current: 'currentColor',
        carousel:'#14ABA7',
        default:'#F8F8F82E',
        blues:'#14ABA7'
      },
      textColor:{
        'blacks':"#3B3B3B"
      },
      fontSize:{
        'xxs':'10px'
      },
      padding:{
        '100px':'100px',
        '80px':'80px',
        '60px':'60px'
      },
      height:{
        '3':"0.75rem"
      },
      margin:{
        '100px':'100px'
      },
      borderRadius:{
        '7':'8px'
      },
      borderWidth:{
        '1':'1px'
      },
      width:{
        '11/4':'24%'
      },
      backgroundColor: theme => ({
        ...theme('colors'),
        'backs': '#FDFEFF',
        'hoverback' :'#F6F6F6',
        'secondary': '#ffed4a',
        'danger': '#e3342f',
        'blacks':'#3B3B3B'
       })
    }
  
  }
}
