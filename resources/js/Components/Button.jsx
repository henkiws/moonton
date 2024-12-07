export default function Button({ type = 'submit', className = '', processing, children , ...props }) {
    return (
        <button
            type={type}
            className={
                `rounded-2xl py-[13px] text-center w-full ${processing && "opacity-30"} ` + className
            }
            disabled={processing}
        >
            {children}
        </button>
    )
}