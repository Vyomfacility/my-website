import { useEffect, useState } from "react";
import "./App.css";

export default function App() {
  const text = "Smart Facility Management. Reinvented.";
  const [displayed, setDisplayed] = useState("");

  useEffect(() => {
    let i = 0;
    const interval = setInterval(() => {
      setDisplayed(text.slice(0, i + 1));
      i++;
      if (i === text.length) clearInterval(interval);
    }, 60);
    return () => clearInterval(interval);
  }, []);

  return (
    <div className="hero">
      <div className="center" />
      <div className="glow orb2" />

      <div className="glass">
        <h1>Vyom Facility</h1>

        <h2>{displayed}<span className="cursor">|</span></h2>

        <p className="subtitle">
          Integrated Facility Management Solutions
        </p>

        <div className="line" />

        <p className="coming">🚧 Website Launching Soon</p>

        <p className="desc">
          We are building a powerful digital platform to manage
          operations, compliance, workforce, and infrastructure —
          all under one roof.
        </p>

        <div className="cta">
          <span>📧 info@vyomfacility.com</span>
        </div>

        <footer>
          © {new Date().getFullYear()} Vyom Facility Pvt. Ltd.
        </footer>
      </div>
    </div>
  );
}
