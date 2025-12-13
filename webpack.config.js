const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyPlugin = require("copy-webpack-plugin"); // <--- IMPORT THIS

const config = {
  entry: {
    main: ["./src/ts/main.ts", "./src/scss/main.scss"],
  },
  output: {
    path: path.resolve(__dirname, "assets"),
    filename: "[name].min.js",
    clean: true, // This deletes 'assets' every time you build
  },
  devtool: "source-map",
  module: {
    rules: [
      {
        test: /\.ts(x)?$/,
        loader: "ts-loader",
        exclude: /node_modules/,
      },
      {
        test: /\.js$/,
        use: "babel-loader",
        exclude: /node_modules/,
      },
      {
        test: /\.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.(png|jpg|gif|svg)$/,
        type: "asset/resource",
        generator: {
          filename: "./images/[name][ext]",
        },
      },
    ],
  },
  resolve: {
    extensions: [".tsx", ".ts", ".js"],
  },
  plugins: [
    new MiniCssExtractPlugin(),
    // --- THIS IS THE PART THAT COPIES YOUR LOGOS ---
    new CopyPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, "src/images"), // Takes from here
          to: path.resolve(__dirname, "assets/images"), // Puts them here
          noErrorOnMissing: true,
        },// 2. JS Vendors
        { 
          from: path.resolve(__dirname, "src/js"), 
          to: path.resolve(__dirname, "assets/js"), 
          noErrorOnMissing: true 
        },
        // 3. Fonts (Critical for Flaticon/FontAwesome)
        { 
          from: path.resolve(__dirname, "src/fonts"), 
          to: path.resolve(__dirname, "assets/fonts"), 
          noErrorOnMissing: true 
        },
        // 4. CSS Vendors (The new folder we just made)
        { 
          from: path.resolve(__dirname, "src/css"), 
          to: path.resolve(__dirname, "assets/css"), 
          noErrorOnMissing: true 
        },
        
      ],
    }),
  ],
};

module.exports = config;