import postcssNested from 'postcss-nested';
import tailwindcss from '@tailwindcss/postcss';
import autoprefixer from 'autoprefixer';

export default {
  plugins: [
    postcssNested(),
    tailwindcss(),
    autoprefixer(),
  ],
};
