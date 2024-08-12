import { setCookie } from "../functions/cookie";
import { burger } from "../functions/burger";
import { disableScroll } from "../functions/disable-scroll";
import { enableScroll } from "../functions/enable-scroll";

setCookie("first-visit", true, {
  path: "/",
  "max-age": 86400,
});
