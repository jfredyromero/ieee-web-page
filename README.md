# IEEE Web Page

This project was generated with [Vite js](https://vitejs.dev/) and configured for using it with PHP, following [this](https://github.com/andrefelipe/vite-php-setup) configuration as example.

Vite (French word for "quick", pronounced /vit/, like "veet") is a build tool that aims to provide a faster and leaner development experience for modern web projects. You can learn more about the rationale behind the tool [here](https://vitejs.dev/guide/why.html).

## Project Dependecies

Run `npm install` to install all dependencies used in this project.

## Development server

Run `npm run dev` to start a dev server. If you navigate to `http://localhost:5173/` you won't see anything. That's because the application needs an Apache server to be serve. You can use [Xampp](https://www.apachefriends.org/es/index.html) and use the proper server host to see the application working. The application will automatically reload if you change any of the source files.

It's important to know that you should not remove the `public/` directory, because the only auto-generated files are in the `public/dist/`. In order to make a change on the PHP files you should work on the files of the `public/` directory. If you want to make changes on the Javascript, SCSS or any image, you should make your changes on the `src/` directory.

## Building

Run `npm run build` to build the project. The built artifacts will be stored in the `public/dist/` directory.

## Previewing the built project

You don't have to run any command to preview the project. The only thing you need is to first build the project in order to use the latest changes and the auto-generated `public/assets/` directory. Then navigate to `http://localhost/public` or whatever host your Apache server application is serving.

## Linting the project

Run `npm run lint` to lint the .ts and .html files of the project.

## Further help

To get more help on Vite go check out the [Vite's Starting Guide](https://vitejs.dev/guide/) page.
