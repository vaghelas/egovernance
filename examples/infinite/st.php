<style>
@import url(http://weloveiconfonts.com/api/?family=typicons);
[class*="typicons-"]:before {
  font-family: 'Typicons', sans-serif;
}

.module {
  width: 300px;
  margin: 20px auto;
}

.top-bar {
  background: #666;
  color: white;
  padding: 0.5rem;
  position: relative;
  overflow: hidden;
}
.top-bar h1 {
  display: inline;
  font-size: 1.1rem;
}
.top-bar .typicons-message {
  display: inline-block;
  padding: 4px 5px 2px 5px;
}
.top-bar .typicons-minus {
  position: relative;
  top: 3px;
}
.top-bar .left {
  float: left;
}
.top-bar .right {
  float: right;
  padding-top: 5px;
}
.top-bar > * {
  position: relative;
}
.top-bar::before {
  content: "";
  position: absolute;
  top: -100%;
  left: 0;
  right: 0;
  bottom: -100%;
  opacity: 0.25;
  background: radial-gradient(#ffffff, #CC3333);
  
}

.discussion {
  list-style: none;
  background: #e5e5e5;
  margin: 0;
  padding: 0 0 50px 0;
}
.discussion li {
  padding: 0.5rem;
  overflow: hidden;
  display: flex;
}
.discussion .avatar {
  width: 40px;
  position: relative;
}
.discussion .avatar img {
  display: block;
  width: 100%;
}

.other .avatar:after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 0;
  height: 0;
  border: 5px solid white;
  border-left-color: transparent;
  border-bottom-color: transparent;
}

.self {
  justify-content: flex-end;
  align-items: flex-end;
}
.self .messages {
  order: 1;
  border-bottom-right-radius: 0;
}
.self .avatar {
  order: 2;
}
.self .avatar:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 0;
  border: 5px solid white;
  border-right-color: transparent;
  border-top-color: transparent;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

.messages {
  background: white;
  padding: 10px;
  border-radius: 2px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.messages p {
  font-size: 0.8rem;
  margin: 0 0 0.2rem 0;
}
.messages time {
  font-size: 0.7rem;
  color: #ccc;
}

@keyframes pulse {
  from {
    opacity: 0;
  }

  to {
    opacity: 0.5;
  }
}

</style>
