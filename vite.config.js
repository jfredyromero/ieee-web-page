import { defineConfig, splitVendorChunkPlugin } from "vite";
import liveReload from "vite-plugin-live-reload";
import path from "path";

export default defineConfig({
	plugins: [
		liveReload(__dirname + "/public/**/*.php"),
		splitVendorChunkPlugin(),
	],
	root: "src",
	base:
		process.env.VITE_APP_ENV === "development"
			? "/ieee-web-page/src/"
			: "/ieee-web-page/public/dist/",
	build: {
		outDir: "../public/dist",
		emptyOutDir: true,
		manifest: true,
		rollupOptions: {
			input: path.resolve(__dirname, "src/main.js"),
		},
	},
	server: {
		strictPort: true,
		port: 5133,
	},
});
